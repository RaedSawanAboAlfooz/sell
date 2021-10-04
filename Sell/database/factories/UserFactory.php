<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'name' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'address'=>$this->faker->address(),
        //     'phone'=>$this->faker->phoneNumber(),
        //     'remember_token' => Str::random(10),
        //     'rol'=>$this->faker->numberBetween(0,1),
        //     'api_token'=>Str::random(120),
        //     'image_profile_name'=>'1629117038_scaled_image_picker5733261746394892370.jpg',
        //     'image_profile_id'=>0,
        //     'number_products'=>$this->faker->numberBetween(0,5000),
        // ];
        return[
                  'name' => 'raed',
            'email' =>'raed121@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678', // password
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'remember_token' => Str::random(10),
            'rol'=>1,
            'api_token'=>Str::random(120),
            'image_profile_name'=>'1629117038_scaled_image_picker5733261746394892370.jpg',
            'image_profile_id'=>0,
            'number_products'=>$this->faker->numberBetween(0,5000),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
