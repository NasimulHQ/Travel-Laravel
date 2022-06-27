<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs_location extends Model
{
    use HasFactory;
    protected $table = 'jobs_locations';
    protected $fillable =
    [
        'job_id',
        'country_id',
        'region_id',
        'city_id',
    ];
}
