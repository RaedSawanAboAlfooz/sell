<?php

namespace App\Http\Resources;
use App\Http\Resources\ImageProductResour;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $address = $this->address;
        if ($address==null) {
            $address='غير موجود ';
        }
        return [
            'coin'=>$this->coin['name'],
            'id'=>$this->id,
            'location'=>$this->location,
            'description'=>$this->description,
            'category'=>$this->category['name'],
            'count_like'=>$this->count_like,
            'price'=>$this->price,
            'accept'=>$this->accept,
            'image_profile_name'=>$this->user->image_profile_name,
            'address'=>$address,
            'status_sell'=>$this->status_sell,
            'user_id'=>$this->user_id,
            'created_at'=>$this->created_at->diffForHumans(),
            'name'=>$this->name,
            'city'=>$this->city->name,
            'user_name'=>$this->user->name,
            'imags'=>ImageProductResource::collection($this->imags),
        ];
    }
}
