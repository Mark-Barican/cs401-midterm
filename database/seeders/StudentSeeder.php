<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific test students
        Student::create([
            'first_name' => 'Alice',
            'last_name' => 'Johnson',
            'program' => 'Computer Science',
            'enrollment_year' => '2023',
            'birthday' => '2000-05-15',
        ]);

        Student::create([
            'first_name' => 'Bob',
            'last_name' => 'Wilson',
            'program' => 'Business Administration',
            'enrollment_year' => '2022',
            'birthday' => '1999-08-22',
        ]);

        // Get counts from environment variables with defaults
        $totalStudents = env('SEED_STUDENTS_COUNT', 45);

        // Create random students
        Student::factory($totalStudents)->create();

        $totalCreated = 2 + $totalStudents;
        $this->command->info("Created {$totalCreated} students: 2 test students + {$totalStudents} random students");
    }
} 