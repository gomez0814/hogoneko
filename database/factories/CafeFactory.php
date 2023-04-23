<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cafe>
 */
class CafeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company,
            'address' => fake()->address,
            'business_hour' => '10:00 ~ 17:00',
            'holiday' => fake()->dayOfWeek,
            'content' => fake()->text,
            'image_path' => fake()->imageUrl,
            'website' => fake()->url,
            'twitter' => fake()->url,
            'instagram' => fake()->url,
            'youtube' => fake()->url
        ];
    }
}
