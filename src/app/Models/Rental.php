<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    /** @use HasFactory<\Database\Factories\RentalFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'price_per_day',
        'vehicle_type',
        'status',
        'description',
        'photo',
        'driver_option',
        'category',
        'tags',
    ];

    protected $casts = [
        'driver_option' => 'boolean',
        'tags' => 'array',
    ];
}
