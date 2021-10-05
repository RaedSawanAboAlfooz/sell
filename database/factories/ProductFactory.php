<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'coin_id'=>$this->faker->numberBetween(1,2),
           'name'=>$this->faker->name(),
           'description'=>$this->faker->text(200),
           'category_id'=>$this->faker->numberBetween(1,50),
           'price'=>$this->faker->numberBetween(50,200),
           'address'=>$this->faker->address(),
           'location'=>$this->faker->numberBetween(0.123424324234234,3.32323232323),
           'status_sell'=>$this->faker->boolean(),
           'user_id'=>$this->faker->numberBetween(1,12),
           'accept'=>1,
           'city_id'=>$this->faker ->numberBetween(1,12)
        ];
    }
}
