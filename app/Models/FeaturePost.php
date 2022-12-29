<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturePost extends Model
{
    use HasFactory;
    protected $table = 'feature_posts';
    protected $fillable = 
    [
        'featpost_image',
        'featpost_title',
        'featpost_heading',
        'featpost_description',
        'featpost_date',
    ];
}
