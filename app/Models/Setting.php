<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    protected static ?array $cache = null;

    /** Labels + defaults for every editable site setting (group => [key => [label, default, type]]). */
    public static function schema(): array
    {
        return [
            'General' => [
                'site_name'   => ['Site name', 'Hopeu', 'text'],
                'footer_text' => ['Footer / short description', 'Our charity works to bring hope, food and education to families in need around the world.', 'textarea'],
                'copyright'   => ['Copyright text', '©' . date('Y') . ' Hopeu All Rights Reserved', 'text'],
            ],
            'Contact details' => [
                'address'   => ['Address', "101 Merritt 5, north tower\n14851 New York, USA", 'textarea'],
                'phone_1'   => ['Phone 1', '+1 (954) 546-3403', 'text'],
                'phone_2'   => ['Phone 2 (optional)', '', 'text'],
                'email_1'   => ['Email 1 (shown on site)', 'support@example.com', 'email'],
                'email_2'   => ['Email 2 (optional)', '', 'email'],
                'map_query' => ['Google Map search text', 'New York, USA', 'text'],
            ],
            'Social links' => [
                'facebook'  => ['Facebook URL', '', 'url'],
                'twitter'   => ['Twitter / X URL', '', 'url'],
                'pinterest' => ['Pinterest URL', '', 'url'],
                'instagram' => ['Instagram URL', '', 'url'],
            ],
            'Home hero' => [
                'hero_slogan'  => ['Hero small slogan', 'Change Starts With You', 'text'],
                'hero_heading' => ['Hero heading', 'Be The Light In Someone’s Darkness', 'text'],
                'hero_text'    => ['Hero paragraph', 'Donate, volunteer, and stand up for those who need your support today.', 'textarea'],
            ],
        ];
    }

    public static function defaults(): array
    {
        $out = [];
        foreach (self::schema() as $fields) {
            foreach ($fields as $key => $meta) {
                $out[$key] = $meta[1];
            }
        }
        return $out;
    }

    /** All settings merged over defaults. Safe to call before migrations have run. */
    public static function allCached(): array
    {
        if (self::$cache === null) {
            try {
                $db = static::query()->pluck('value', 'key')->all();
            } catch (\Throwable $e) {
                $db = [];
            }
            self::$cache = array_merge(self::defaults(), array_filter($db, fn ($v) => $v !== null));
        }
        return self::$cache;
    }

    public static function flush(): void
    {
        self::$cache = null;
    }

    public static function put(array $data): void
    {
        $allowed = array_keys(self::defaults());
        foreach ($data as $key => $value) {
            if (in_array($key, $allowed, true)) {
                static::updateOrCreate(['key' => $key], ['value' => (string) ($value ?? '')]);
            }
        }
        self::$cache = null;
    }
}
