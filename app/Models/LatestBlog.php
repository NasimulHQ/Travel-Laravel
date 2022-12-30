<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestBlog extends Model
{
    use HasFactory;
    protected $table = 'latest_blogs';
    protected $fillable =
    [
        'latestblog_image',
        'latestblog_title',
        'latestblog_heading',
        'latestblog_date',
    ];
}
