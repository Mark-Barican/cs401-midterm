<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some specific test courses
        $testCourses = [
            [
                'subject' => 'Mathematics',
                'course_code' => 'MATH-101',
                'credits' => 3,
                'description' => 'Basic mathematical concepts and operations',
            ],
            [
                'subject' => 'Computer Science',
                'course_code' => 'CSCI-201',
                'credits' => 4,
                'description' => 'Introduction to programming concepts',
            ],
            [
                'subject' => 'English',
                'course_code' => 'ENGL-100',
                'credits' => 3,
                'description' => 'English composition and writing skills',
            ],
            [
                'subject' => 'History',
                'course_code' => 'HIST-150',
                'credits' => 3,
                'description' => 'Survey of world history and civilizations',
            ],
        ];

        foreach ($testCourses as $courseData) {
            Course::firstOrCreate(
                ['course_code' => $courseData['course_code']],
                $courseData
            );
        }

        // Get counts from environment variables with defaults
        $totalCourses = env('SEED_COURSES_COUNT', 33);

        // Create additional random courses
        Course::factory($totalCourses)->create();

        $totalCreated = 4 + $totalCourses;
        $this->command->info("Created {$totalCreated} courses: 4 test courses + {$totalCourses} random courses");
    }
} 