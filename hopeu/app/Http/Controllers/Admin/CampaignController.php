<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::ordered()->paginate(15);

        return view('admin.campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        return view('admin.campaigns.form', ['campaign' => new Campaign(['is_active' => true, 'category' => 'General'])]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        Campaign::create($data);

        return redirect()->route('admin.campaigns.index')->with('success', 'Campaign created.');
    }

    public function edit(Campaign $campaign)
    {
        return view('admin.campaigns.form', compact('campaign'));
    }

    public function update(Request $request, Campaign $campaign)
    {
        $data = $this->validated($request, $campaign);
        $campaign->update($data);

        return redirect()->route('admin.campaigns.index')->with('success', 'Campaign updated.');
    }

    public function destroy(Campaign $campaign)
    {
        $this->deleteUpload($campaign->image);
        $campaign->delete();

        return redirect()->route('admin.campaigns.index')->with('success', 'Campaign deleted.');
    }

    private function validated(Request $request, ?Campaign $campaign = null): array
    {
        $data = $request->validate([
            'title'      => ['required', 'string', 'max:180'],
            'category'   => ['required', 'string', 'max:60'],
            'excerpt'    => ['nullable', 'string', 'max:255'],
            'goal'       => ['required', 'integer', 'min:0'],
            'raised'     => ['required', 'integer', 'min:0'],
            'supporters' => ['required', 'integer', 'min:0'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'image'      => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:3072'],
        ]);

        $data['is_active']  = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            $dir  = public_path('uploads/campaigns');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $file = $request->file('image');
            $name = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $file->move($dir, $name);

            if ($campaign) {
                $this->deleteUpload($campaign->image);
            }
            $data['image'] = 'uploads/campaigns/' . $name;
        } else {
            unset($data['image']);   // keep existing image
        }

        return $data;
    }

    /** Only removes files we uploaded ourselves, never the bundled template images. */
    private function deleteUpload(?string $path): void
    {
        if ($path && str_starts_with($path, 'uploads/campaigns/')) {
            @unlink(public_path($path));
        }
    }
}
