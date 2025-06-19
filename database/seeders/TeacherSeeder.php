<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific test teachers
        Teacher::create([
            'first_name' => 'Sarah',
            'last_name' => 'Miller',
            'email' => 'sarah.miller@school.edu',
            'department' => 'Math',
            'birthday' => '1985-03-12',
        ]);

        Teacher::create([
            'first_name' => 'David',
            'last_name' => 'Brown',
            'email' => 'david.brown@school.edu',
            'department' => 'Science',
            'birthday' => '1978-11-08',
        ]);

        // Get counts from environment variables with defaults
        $totalTeachers = env('SEED_TEACHERS_COUNT', 30);

        // Create random teachers
        Teacher::factory($totalTeachers)->create();

        $totalCreated = 2 + $totalTeachers;
        $this->command->info("Created {$totalCreated} teachers: 2 test teachers + {$totalTeachers} random teachers");
    }
} 