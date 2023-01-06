<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientbook extends Model
{
    use HasFactory;
    protected $table = 'clientbooks';
    protected $fillable =
    [
        'client_no',
        'cl_name',
        'cl_bed',
        'cl_nid',
        'cl_date_of_birth',
        'cl_city',
        'cl_country',
        'cl_email',
        'cl_phone',
    ];
}
