<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image_user_id'=>$this->faker->numberBetween(1,50),
            'post_id'=>$this->faker->numberBetween(1,200),
            'body'=>$this->faker->text(200),
            'user_id'=>$this->faker->numberBetween(1,19),
            'count_like'=>$this->faker->numberBetween(1,1900),
        ];
    }
}
