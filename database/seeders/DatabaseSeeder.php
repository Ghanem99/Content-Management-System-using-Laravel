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
        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
                'name' => 'Work',
                'slug' => 'work'
	    ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Post::create([
           'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => ' fjdkfjd kfjd ',
            'body' => 'dkfjdkf dfk djkfj kj fkdjf dkj dkfjd kfjd '
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'excerpt' => ' fjdkfjd kfjd ',
            'body' => 'dkfjdkf dfk djkfj kj fkdjf dkj dkfjd kfjd '
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Family Post',
            'slug' => 'my-third-post',
            'excerpt' => ' fjdkfjd kfjd ',
            'body' => 'dkfjdkf dfk djkfj kj fkdjf dkj dkfjd kfjd '
        ]);
    }
}
