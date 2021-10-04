<?php

 namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\City    ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index (){
        $city= City::latest()->get();
        return response($city,200);
        }

}
