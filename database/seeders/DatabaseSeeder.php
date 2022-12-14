<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(5)->create();
        Category::factory(3)->create();
        Course::factory(10)->create();
        Post::factory(60)->create();
    }
}
