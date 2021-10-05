<?php

namespace Database\Factories;

use App\Models\Folwo;
use Illuminate\Database\Eloquent\Factories\Factory;

class FolwoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Folwo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,19),
            'counter'=>$this->faker->numberBetween(0,2000),
            'cousomer_id'=>$this->faker->numberBetween(1,100)
        ];
    }
}
