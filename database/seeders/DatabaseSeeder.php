<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            // create a fake data, except for the user's name.
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            // Now, we will create a 5 post, but all of them will be written by the same user.
            'user_id' => $user->id
            ]);
    }
}
