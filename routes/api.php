<?php

use App\Http\Controllers\api\auth\LoginController;
use App\Http\Controllers\api\auth\RegisterController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\CityController;
use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\NoteficationController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\EditProfileController;
use App\Http\Controllers\api\SliderController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix'=>'/'],function () {
    Route::get('slider',[SliderController::class,'index']);
    Route::delete('deleteProduct',[ProductController::class,'destroy']);
    Route::get('controlLikeProduct',[ProductController::class,'addLick'] );
    Route::post('register', [RegisterController::class,'register'])->name('register');
    Route::get('login', [LoginController::class,'login'])->name('login');
    Route::resource('notification',NoteficationController::class );
    Route::get('category', [CategoryController::class,'index']);
    Route::get ('search_product',[ProductController::class,'search']);
    Route::get('city', [CityController::class,'index']);
    Route::get('myProduct/{id}', [ProductController::class,'show']);
    Route::get('ProductsFromCategory', [ProductController::class,'productFromCategory']);
    Route::get ('comments', [CommentController::class,'index']);
    Route::post('productImage', [ProductController::class,'stroImage']);
    Route::post('userimage', [EditProfileController::class,'editImageProfile']);
    Route::put('editprofile/{id}', [EditProfileController::class,'edit']) ;
    Route::post('product', [ProductController::class,'store']);
});






