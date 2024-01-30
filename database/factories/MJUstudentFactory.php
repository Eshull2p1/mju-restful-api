<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MJUstudent>
 */
class MJUstudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_code' => $this->faker->unique()->numerify('#####'),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'first_name_en' => $this->faker->unique()->firstName,
            'last_name_en' => $this->faker->unique()->lastName,
            'major_id' => \App\Models\Major::factory(),
            'id_card' => $this->faker->unique()->numerify('################'),
            'gender' => $this->faker->randomElement(['F', 'M']),
            'birthdate' => $this->faker->date,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
