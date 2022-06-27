<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs_skills_softwares extends Model
{
    use HasFactory;
    protected $table = 'jobs_skills_softwares';
    protected $fillable =
    [
        'job_id',
        'type_id',
        'typetype',
    ];
}
