<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentChildResource extends JsonResource
{

    public function toArray($request)
    {
        $imagename='null';
        if ($this->imageUserProfile!='null'){
            $imagename =$this->imageUserProfile;
        }else {
            $imagename='assets/imags/profile.png';// rout image profile in Modils app in assets
        }
        return[
            'body'=>$this->body,
            'user_name'=>$this->user_name,
            'image_child_user'=>$imagename->image_name,
        ];
    }
}
