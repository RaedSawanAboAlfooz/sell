<?php

namespace Database\Seeders;

use App\Models\Coin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Coin::create([
            'name'=>'D'
        ]);

        Coin::create([
            'name'=>'TRY'
        ]);

        User::create([
            'name' => 'raed',
            'email' =>'raed121@gmail.com',
            'email_verified_at' => now(),
            'password' =>Hash::make(12345678), // password
            'address'=>'$this->faker->address()',
            'phone'=>06666664545,
            'remember_token' => 'fsdpdsofjosdjodfijsofjosdjfoisdjfiusdhgsjdfoidfododfijsdof',
            'rol'=>1,
            'api_token'=>'dfspdfjkpsdofposdpfoisdpofipsdoifpoidspfoisdpofiposdifposdifpoisdpfoidsopfipodsifopsd',
            'image_profile_name'=>'1629117038_scaled_image_picker5733261746394892370.jpg',
            'image_profile_id'=>0,
            'number_products'=>34,
        ]);

        //     \App\Models\Notefication::factory(100)->create();
        //   \App\Models\User::factory(1)->create();
        //  \App\Models\Product::factory(201)->create();
        //  \App\Models\Category::factory(30)->create();
        //  \App\Models\Image::factory(201)->create();
        //  \App\Models\Folwo::factory(100)->create();
        //  \App\Models\City::factory(50)->create();
        //  \App\Models\ChildComment::factory(210)->create();
        // \App\Models\Comment::factory(101)->create();
        // \App\Models\ImageUser::factory(1)->create();
        // \App\Models\Coin::factory(1)->create();


    }
}
