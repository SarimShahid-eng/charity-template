<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'message', 'ip_address', 'read_at'];

    protected $casts = ['read_at' => 'datetime'];

    public function scopeUnread(Builder $q): Builder
    {
        return $q->whereNull('read_at');
    }

    public function getIsReadAttribute(): bool
    {
        return $this->read_at !== null;
    }
}
