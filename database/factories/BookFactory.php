<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "author_id" => mt_rand(1, 5),
            "judul" => $this->faker->sentence(3),
            "slug" => $this->faker->slug(),
            "halaman" => mt_rand(312, 547),
            "sinopsis" => $this->faker->sentence(20)
        ];
    }
}
