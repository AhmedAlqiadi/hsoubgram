<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images=['1.jpg','2.jpg','3.jpeg','4.jpg','5.jpg','6.jfif'];
        return [
            'description'=>fake()->sentence(),
            'slug'=>Str::slug(fake()->sentence(6)),
            'image'=>'posts/'.fake()->randomElement($images),
            'user_id'=>User::factory(),
        ];
    }
}
