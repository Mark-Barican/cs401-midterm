<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        $programs = [
            'Computer Science', 'Business Administration', 'Engineering', 
            'Medicine', 'Education', 'Psychology', 'Mathematics',
            'Biology', 'Chemistry', 'Physics', 'English Literature',
            'History', 'Economics', 'Political Science', 'Art'
        ];

        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'program' => $this->faker->randomElement($programs),
            'enrollment_year' => $this->faker->numberBetween(2020, 2024),
            'birthday' => $this->faker->dateTimeBetween('-25 years', '-18 years'),
        ];
    }
} 