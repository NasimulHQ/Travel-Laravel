<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelerBook extends Model
{
    use HasFactory;
    protected $table = 'traveler_books';
    protected $fillable =
    [
        'tr_name',
        'tr_seat',
        'tr_passportnum',
        'tr_date_of_birth',
        'tr_expiry_date',
        'tr_city',
        'tr_country',
        'tr_email',
        'tr_phone',
    ];
}
