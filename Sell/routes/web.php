<?php

use App\Http\Controllers\web\CategoryController;
use App\Http\Controllers\web\CityController;
use App\Http\Controllers\web\ProductController;
use App\Http\Controllers\web\SliderController;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::resource('slider', SliderController::class)->names('slider');
  Route:: group(['prefix'=>'/' ,'middleware'=>['auth','admin']],function () {
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route:: group( ['prefix'=>'/',] ,function () {
  Route::get('/productunaccept',[App\Http\Controllers\web\ProductController::class,'indexProductUnAccept'])->name('unAccept');
  Route::get('/productaccepted',[App\Http\Controllers\web\ProductController::class,'indexProductAccepted'])->name('Accepted');
  Route::delete('accept/{id}',[App\Http\Controllers\web\ProductController::class,'accept'])->name('accept');
  Route::resource('category',CategoryController::class)->names('category');
  Route::resource('city', CityController::class)->names('city');
  Route::resource('productUnAccept', App\Http\Controllers\web\ProductController::class )->names('productunaccept');
  });
});
