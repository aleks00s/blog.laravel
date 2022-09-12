<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\User;
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
        $categories = Category::factory(10)->create();

        $tags = Tag::factory(20)->create();

        $posts = Post::factory(40)->create();

        $users = User::factory(10)->create();



        foreach ($posts as $post) {
            $tagIds = $tags->random(random_int(3, 6))->pluck('id');
            $post->tags()->attach($tagIds);
        }
    }
}

