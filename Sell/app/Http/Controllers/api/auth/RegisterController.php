<?php

namespace App\Http\Controllers\api\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageUser;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function   register  (Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        if (User::where('email', '=',$request->get('email'))->count() >0){
            $error = 'هذا الايميل مستخدم بالفعل ';
            return response( $error ,400);
        }

        $token= Str::random(230);
        $user= User::create([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=> Hash::make( $request->get('password')),
            'api_token'=>$token
        ]);

        $imageUser = new ImageUser;
        $imageUser->image_name='assets/imags/profile.png';
        $imageUser->user_id=$user->id;
        $imageUser->save();


        $user->image_profile_id=$imageUser->id;
        $user->image_profile_name=$imageUser->image_name;
        $user -> save();

        return response( $user,200 );
       }
}
