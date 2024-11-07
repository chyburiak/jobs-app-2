<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Career>
 */
class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory()->create()->id,
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(),
            'location' => fake()->city(),
            'salary' => fake()->randomElement([50000, 20000, 30000, 90000, 15000, 48000, 32000, 25000]),
            'type' => fake()->randomElement(['In person', 'Remote', 'Hybrid']),
            'range' => fake()->randomElement(['Permanent', 'Long term', 'Short term', 'Contract', 'Long term Contract', 'One time']),
        ];
    }
}
