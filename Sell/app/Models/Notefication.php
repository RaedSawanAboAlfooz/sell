<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notefication extends Model
{
    use HasFactory;
    protected $fillable = [
        'body','title','user_id'
    ];

}
