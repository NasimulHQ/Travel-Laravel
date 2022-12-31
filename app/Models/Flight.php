<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'flights';
    protected $fillable =
    [
        'airline_image',
        'airline_title',
        'airline_form',
        'airline_destination',
        'airline_date',
        'airline_departure_time',
        'airline_arrival_time',
        'airline_duration',
        'airline_economy_seat',
        'airline_business_seat',
        'airline_economy_price',
        'airline_business_price',
        'airline_payment',
    ];
}
