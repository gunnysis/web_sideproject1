<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecretPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'kind',
        'title',
        'content'
    ];
}
