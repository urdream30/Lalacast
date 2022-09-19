<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();
        // $user = User::factory()->create([
        //     'name'=>'John Doe'
        // ]);

        // Post::factory(5)->create([
        //     'user_id'=>$user->id
        // ]);

        Post::factory()->create();
    }
}
