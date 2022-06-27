<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs_categories extends Model
{
    use HasFactory;
    protected $table = 'jobs_categories';
    protected $fillable =
    [
        'job_id',
        'category_id',
    ];
}
