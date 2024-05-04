<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revelation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'birth_year',
        'city',
        'personality',
        'gender',
        'occupation',
        'education',
        'position'
    ];
}
