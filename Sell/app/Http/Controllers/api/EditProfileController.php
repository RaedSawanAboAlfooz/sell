<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
 use App\Models\ImageUser;
use App\Models\User;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\File;

class EditProfileController extends Controller
{
   public function editImageProfile(Request $request){
    $newNameImage='';
    if ($request->hasFile("file")==null ){
        return response('error uploading image :( ',300);
    }else{
        $name = $request->file('file')->getClientOriginalName();
        $newNameImage =time() . '_' . $name;
        $request->file('file')->move(public_path() .'\assets\images\users', $newNameImage);
        $user =User::find  ( $request -> get('user_id'));
        $oldImageName=$user->image_profile_name;


         //stor new image name in table images user ...

         if ($user->image_profile_id==0) {
            $imageUser =ImageUser::find($user->image_profile_id);
            $imageUser->image_name=$newNameImage;
            $imageUser->save();
            $user ->image_profile_name=$newNameImage;
            $user->save();
            return response($imageUser,200);
            }else {
                $imageUser =ImageUser::find($user->image_profile_id);
                $imageUser->image_name=$newNameImage;
                $imageUser->save();
                $user ->image_profile_name=$newNameImage;
                $user->save();
                    if ($oldImageName!='assets/imags/profile.png'&&$user->image_profile_id!=0 ) {
                        File::delete(public_path() . '/assets/images/users/' . $oldImageName);
                    }
               return response($imageUser,200);
            }
        }
    }

    public function edit(Request $request,$id)
    {
       $user= User::find($id);
       $type =$request ->get('type');
       if ($type=='name') {
           $user -> name=$request->get('name');
       }else if ($type == 'email') {
           $user->email=$request ->get('email');
       }
       $user ->save();
       return response( $user ,200);
    }







}
