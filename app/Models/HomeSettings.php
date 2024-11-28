<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSettings extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_description',
        'hero_image',
        'about_title',
        'about_description',
        'about_image',
    ];

    protected $casts = [
        'hero_image' => 'string',
        'about_image' => 'string',
    ];

    // Tambahkan getter untuk URL gambar
    protected function heroImage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? asset('storage/' . $value) : null,
        );
    }

    protected function aboutImage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? asset('storage/' . $value) : null,
        );
    }
}
