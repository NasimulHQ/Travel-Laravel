<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $fillable = 
    [
        'galler_title',
        'galler_heading',
        'galler_image',
        'galler_image_title',
    ];
}
