<?php

namespace Database\Factories;

use App\Models\Major;
use Illuminate\Database\Eloquent\Factories\Factory;

class MajorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'name_en' => $this->faker->word,
    
        ];
    }
}
