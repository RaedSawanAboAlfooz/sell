<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Seeder;

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
        //     \App\Models\Notefication::factory(100)->create();
          \App\Models\User::factory(1)->create();
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
