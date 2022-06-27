<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = 
    [
        'user_id',
        'job_title',
        'job_description',
        'job_nature',
        'job_length',
        'job_type',
        'skill_level_id',
        'job_privacy',
        'has_budget',
        'min_hourly_rate',
        'max_hourly_rate',
        'budget',
    ];
}
