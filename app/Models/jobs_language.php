<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs_language extends Model
{
    use HasFactory;
    protected $table = 'jobs_languages';
    protected $fillable =
    [
        'job_id',
        'language_id',
        'language_proficiency_id',
    ];
}
