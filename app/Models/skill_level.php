<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill_level extends Model
{
    use HasFactory;
    protected $table = 'skill_levels';
    protected $fillable =
    [
        'title',
    ];
}
