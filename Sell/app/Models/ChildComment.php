<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class ChildComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_id','body','image_user_id','user_name','count_like'
    ];

    public function baseComment()
    {
        return $this -> belongsTo(Comment::class);
    }
    public function userComment  ()
    {
        return $this ->belongsTo( User::class);
    }
    public function imageUserProfile ()
    {
        return $this ->hasOne(ImageUser::class,'id','image_user_id');
    }

}
