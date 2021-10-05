<?php

    namespace App\Http\Controllers\api\auth;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login (Request $request){
         $request ->validate([
             'email'=>'required|email',
             'password'=>'required'
         ] );

         $credentials = $request->only('email', 'password');

         if (Auth::attempt($credentials)) {
             $email = $request ->get( 'email');
             $user = DB::table('users')-> where('email',$email)->get( ) ;
            //  $user = User:: where('email',$email)->get( ) ;

             return response(  $user , 200 );
        }
        else {
            return response()->json(['eror'=> 'not user found'],400);

        }
    }

}
