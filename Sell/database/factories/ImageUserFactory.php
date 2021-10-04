<?php

namespace Database\Factories;

use App\Models\ImageUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImageUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'user_id'=>$this->faker->numberBetween(1,29),
           'image_name'=>'1629144963_scaled_image_picker2765773884675856319.png'
        ];
    }
}
