<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 1000; $i++) {
            Post::create([
                'user_id' => $i,
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
            ]);
        }
    }
}
