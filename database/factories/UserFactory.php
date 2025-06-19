<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'user_name' => $this->faker->unique()->userName(),
            'password' => Hash::make('password123'),
            'registration_date' => $this->faker->dateTimeBetween('-2 years', 'now'),
        ];
    }

    public function student(): static
    {
        return $this->state(fn (array $attributes) => [
            'user_name' => 'student_' . $this->faker->unique()->numerify('####'),
        ]);
    }

    public function teacher(): static
    {
        return $this->state(fn (array $attributes) => [
            'user_name' => 'teacher_' . $this->faker->unique()->numerify('####'),
        ]);
    }
} 