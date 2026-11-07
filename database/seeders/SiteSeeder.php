<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SiteSeeder extends Seeder
{
    public function run(): void
    {
        // Admin account (override with ADMIN_EMAIL / ADMIN_PASSWORD in .env BEFORE seeding)
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@example.com')],
            ['name' => 'Administrator', 'password' => Hash::make(env('ADMIN_PASSWORD', 'ChangeMe123!'))]
        );

        // Default site settings (only fills keys that don't exist yet)
        foreach (Setting::defaults() as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }

        // Sample campaigns using images that ship with the template
        if (Campaign::count() === 0) {
            $rows = [
                ['Warm Meals, Winter Food Drive', 'Water', 'images/media/img_06.jpg', 45000, 25000, 1425],
                ['Medical Camp in Rural Kenya',    'Food',  'images/media/img_07.jpg', 60000, 18000, 980],
                ['Child Sponsorship Program',      'Poor',  'images/media/img_08.jpg', 30000, 21000, 760],
                ['Lights For Learning Solar Kits', 'Water', 'images/media/img_52.jpg', 52000, 12500, 540],
                ['Feeding Hope: Monthly Food',     'Food',  'images/media/img_53.jpg', 40000, 33000, 1210],
                ['Join Our Child Donation',        'Poor',  'images/media/img_54.jpg', 35000, 9000,  430],
            ];
            foreach ($rows as $i => [$title, $cat, $img, $goal, $raised, $sup]) {
                Campaign::create([
                    'title' => $title, 'category' => $cat, 'image' => $img,
                    'excerpt' => 'Warm meals, warm hearts – every contribution makes a difference.',
                    'goal' => $goal, 'raised' => $raised, 'supporters' => $sup,
                    'is_active' => true, 'sort_order' => $i,
                ]);
            }
        }
    }
}
