<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        // \App\Models\User::factory(10)->create();
        \App\Models\Article::factory(20)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Comment::factory(40)->create();
        

        // User::factory()->create([
        //     "name" => "Alice",
        //     "email" => "alice@gmail.com",
        // ]);
        // User::factory()->create([
        //     "name" => "Bob",
        //     "email" => "bob@gmail.com",
        // ]);
       
    }
}
