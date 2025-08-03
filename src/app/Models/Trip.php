<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    /** @use HasFactory<\Database\Factories\TripFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'quota',
        'available_date',
        'photo',
        'itinerary',
        'category',
        'tags',
    ];

    protected $casts = [
        'available_date' => 'date',
        'tags' => 'array',
    ];
}
