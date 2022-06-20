<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularDestination extends Model
{
    use HasFactory;
    protected $table = 'popular_destinations';
    protected $fillable = [
        'pdes_imgage',
        'pdes_title',
        'pdes_price',
    ];
}
