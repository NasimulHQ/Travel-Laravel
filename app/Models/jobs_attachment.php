<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs_attachment extends Model
{
    use HasFactory;
    protected $table = 'jobs_attachments';
    protected $fillable = 
    [
        'job_id',
        'user_id',
        'file_name',
        'file_original_name',
        'size',
    ];
}
