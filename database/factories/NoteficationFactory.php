<?php

namespace Database\Factories;

use App\Models\Notefication;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteficationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notefication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body'=>$this->faker->address(),
            'title'=>$this->faker->name(),
            'user_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
