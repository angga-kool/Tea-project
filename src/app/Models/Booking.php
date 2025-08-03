<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bookable_id',
        'bookable_type',
        'start_date',
        'end_date',
        'quantity',
        'driver',
        'status',
        'total_price',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'driver' => 'boolean',
    ];

    public function bookable()
    {
        return $this->morphTo();
    }
}
