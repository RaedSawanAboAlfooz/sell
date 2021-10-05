<?php

namespace App\Http\Resources;
use Illuminate\Http\Request;
use App\Http\Resources\CommentChildResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $imageuserprofilename = 'null';
        if ($this->user['image_profile_name']==null){
            $imageuserprofilename='assets/imags/profile.png';
        }else {
            $imageuserprofilename=$this->user['image_profile_name'];
        }
         return [
             'id'=>$this->id,
             'post_id'=>$this->post_id,
            'body'=>$this->body,
            'user_name'=>$this->user ['name'],
            'image_id'=>$this->image_user_id,
            'created_at'=>$this->created_at->diffForHumans(),
             'image_profile'=>$imageuserprofilename,
            'count_like'=>$this->count_like,
             'comment_child'=>CommentChildResource::collection($this->commentChild) ,
        ];

    }

}
