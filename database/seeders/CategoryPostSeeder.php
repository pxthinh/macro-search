<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $categories = Category::all()->pluck('id')->toArray();

        foreach ($posts as $post) {
            $randomCategories = array_rand($categories, rand(1, 3));
            if (is_array($randomCategories)) {
                $post->categories()->attach($randomCategories);
            } else {
                $post->categories()->attach([$randomCategories]);
            }
        }
    }
}
