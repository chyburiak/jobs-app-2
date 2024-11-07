<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'name' => fake()->name(),
            'logo' => fake()->url(),
            'industry' => fake()->words(3, true),
            'location' => fake()->address(),
            'description' => fake()->paragraphs(6, true),
            'website' => fake()->url(),
        ];
    }
}
