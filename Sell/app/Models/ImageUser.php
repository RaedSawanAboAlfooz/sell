<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ImageUser extends Model
{
    use HasFactory;
    protected $fillabel=['user_id','image_name'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function childComment()
    {
        return $this -> belongsTo(ChildComment::class);
    }
    public function  Comment()
    {
        return $this -> belongsTo( Comment::class);
    }

}
