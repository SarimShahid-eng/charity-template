<?php

namespace App\Support;

use App\Models\Setting;

/**
 * Editable page content (texts + images).
 * Defaults live in resources/content/pages.php; admin overrides live in the `settings` table.
 *
 * In Blade:  {{ $c('home_t001') }}      -> text
 *            {{ $c->img('home_i001') }} -> image URL
 */
class Content
{
    protected static ?array $schema = null;
    protected static ?array $defaults = null;

    public static function make(): self
    {
        return new self();
    }

    public static function pages(): array
    {
        return self::$schema ??= require resource_path('content/pages.php');
    }

    /** Friendly [title, hint] for a block of a page, falling back to the raw section name. */
    public static function block(string $page, string $section): array
    {
        static $blocks = null;
        $blocks ??= require resource_path('content/blocks.php');

        return $blocks[$page][$section] ?? [$section, ''];
    }

    /** key => default value for every field. */
    public static function defaults(): array
    {
        if (self::$defaults === null) {
            self::$defaults = [];
            foreach (self::pages() as $page) {
                foreach ($page['sections'] as $fields) {
                    foreach ($fields as $key => $meta) {
                        self::$defaults[$key] = $meta[1];
                    }
                }
            }
        }
        return self::$defaults;
    }

    public function __invoke(string $key): string
    {
        $db = Setting::allCached();
        $val = $db[$key] ?? '';

        return $val !== '' ? $val : (self::defaults()[$key] ?? '');
    }

    public function img(string $key): string
    {
        $path = $this($key);

        return str_starts_with($path, 'http') ? $path : asset($path);
    }
}
