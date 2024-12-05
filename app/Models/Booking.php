<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'check_in',
        'check_out',
        'room',
        'guest',
        'price_per_night',
        'total_price',
        'rental',
        'price_per_rental',
        'status',
    ];

    protected $dates = ['check_in', 'check_out'];

    public function setCheckInAttribute($value)
    {
        $this->attributes['check_in'] = $value instanceof Carbon ? $value : Carbon::parse($value);
    }

    public function setCheckOutAttribute($value)
    {
        $this->attributes['check_out'] = $value instanceof Carbon ? $value : Carbon::parse($value);
    }

}
