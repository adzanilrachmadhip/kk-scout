<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchField extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    // Scope for active fields
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Default ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('name');
    }
}
