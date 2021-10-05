<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index (){
        $category = DB::table('categories')->latest()->get();
        return response( $category ,200 );
     }
}
