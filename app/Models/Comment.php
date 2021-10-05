<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
    'body','user_id', 'post_id','count_like'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user (){
        return $this->belongsTo(User::class);
    }
    public function commentChild()
    {
        return $this->hasMany(ChildComment::class)->with('imageUserProfile');
    }
    public function image_profile ()
    {
        return $this->hasOne(ImageUser::class,'id','image_user_id' );
    }
}
