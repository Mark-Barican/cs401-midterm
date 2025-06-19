<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        $departments = [
            'Math', 'Science', 'English', 'History', 'PE',
            'Arts', 'Music', 'CS', 'Chem', 'Physics'
        ];

        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'department' => $this->faker->randomElement($departments),
            'birthday' => $this->faker->dateTimeBetween('-65 years', '-25 years'),
        ];
    }
} 