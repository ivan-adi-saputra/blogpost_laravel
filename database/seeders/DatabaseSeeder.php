<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();
        Post::factory(20)->create();
        Category::create([
            'name' => 'Programming', 
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Design', 
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Businness', 
            'slug' => 'businness'
        ]);
    }
}
