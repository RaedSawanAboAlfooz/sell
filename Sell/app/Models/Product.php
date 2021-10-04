<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\City;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description' ,'category_id',
        'price','address','status_sell','user_id','accept','city_id','count_like'
    ];

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }
    public function imags(){
        return $this ->hasMany(Image::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function city(){
        return $this ->belongsTo(City::class);
    }
    public function comments(){
        return $this -> hasMany(Comment::class);
    }

}
