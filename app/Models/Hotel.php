<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';
    protected $fillable =
    [
        'hotel_image',
        'hotel_title',
        'hotel_location',
        'hotel_rating',
        'hotel_description',
        'hotel_singlebed',
        'hotel_doublebed',
        'hotel_singlebed_price',
        'hotel_doublebed_price',
        'hotel_payment',
    ];
}
