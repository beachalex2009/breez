<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->randomNumber(2),
            'company' => $this->faker->company(),
            'country' => $this->faker->country(),
            'job_title' => $this->faker->jobTitle(),
            'department' => $this->faker->sentence(),
            'address' => $this->faker->streetAddress(),
            'mobile' =>  $this->faker->phoneNumber(),
        ];
    }
}
