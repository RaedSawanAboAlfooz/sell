<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url_image'=>$this->faker->url(),
            'image_name'=>'1629144118_scaled_image_picker705799140151766065.jpg',
            'product_id'=>$this->faker->numberBetween(1,200)
        ];
    }
}
