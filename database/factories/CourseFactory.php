<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        $subjects = [
            'Mathematics', 'Science', 'English', 'History', 'Physics',
            'Chemistry', 'Biology', 'Computer Science', 'Art', 'Music',
            'Physical Education', 'Psychology', 'Economics', 'Geography'
        ];

        return [
            'subject' => $this->faker->randomElement($subjects),
            'course_code' => strtoupper($this->faker->lexify('???')) . '-' . $this->faker->numberBetween(100, 999),
            'credits' => $this->faker->numberBetween(1, 6),
            'description' => $this->faker->sentence(),
        ];
    }
} 