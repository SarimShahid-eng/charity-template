<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'title', 'category', 'excerpt', 'image', 'goal', 'raised',
        'supporters', 'is_active', 'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'goal'      => 'integer',
        'raised'    => 'integer',
        'supporters'=> 'integer',
    ];

    public function scopeActive(Builder $q): Builder
    {
        return $q->where('is_active', true);
    }

    public function scopeOrdered(Builder $q): Builder
    {
        return $q->orderBy('sort_order')->orderByDesc('id');
    }

    public function getImageUrlAttribute(): string
    {
        $img = $this->image ?: 'images/media/img_06.jpg';
        return str_starts_with($img, 'http') ? $img : asset($img);
    }

    public function getPercentAttribute(): int
    {
        return $this->goal > 0 ? (int) min(100, round($this->raised / $this->goal * 100)) : 0;
    }
}
