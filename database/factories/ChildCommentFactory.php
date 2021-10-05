<?php

namespace Database\Factories;

use App\Models\childComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChildCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = childComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            // 'image_profile_user_name'=>'1629117038_scaled_image_picker5733261746394892370.jpg',
        'image_user_id'=>$this->faker->numberBetween(1,50),
        'user_name'=>$this ->faker ->name(),
        'body'=>$this->faker->text(),
        'comment_id'=>$this->faker->numberBetween(1,100),
        'user_id'=>$this->faker->numberBetween(1,29),
        'count_like'=>$this->faker->numberBetween(0,2000)
        ];
    }
}
