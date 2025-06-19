<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('Starting simplified database seeding with environment-based configuration...');
        $this->command->info('Environment: ' . env('APP_ENV', 'local'));
        $this->command->info('');
        
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            CourseSeeder::class,
            ScheduleSeeder::class,
        ]);

        $this->command->info('');
        $this->command->info('=== Database Seeding Completed Successfully! ===');
        $this->command->info('Created a simplified school management system database.');
        $this->command->info('');
        $this->command->info('=== Default Test Credentials ===');
        $this->command->info('Admin: admin / admin123');
        $this->command->info('Test User: johndoe / password123');
        $this->command->info('Test User: janesmith / password123');
        $this->command->info('');
        $this->command->info('=== Environment Configuration Used ===');
        
        // User configuration
        $this->command->info('Users: 3 test users + ' . env('SEED_USERS_COUNT', 20) . ' random users');
        
        // Student configuration
        $this->command->info('Students: 2 test students + ' . env('SEED_STUDENTS_COUNT', 45) . ' random students');
        
        // Teacher configuration
        $this->command->info('Teachers: 2 test teachers + ' . env('SEED_TEACHERS_COUNT', 30) . ' random teachers');
        
        // Role configuration
        $this->command->info('Roles: 4 system roles + ' . env('SEED_ROLES_COUNT', 0) . ' additional roles');
        
        // Course configuration
        $this->command->info('Courses: 4 test courses + ' . env('SEED_COURSES_COUNT', 33) . ' random courses');
        
        // Schedule configuration
        $this->command->info('Schedules: 3 test schedules + ' . env('SEED_SCHEDULES_COUNT', 53) . ' random schedules');

        $this->command->info('');
        $this->command->info('=== Database Tables Created ===');
        $this->command->info('✓ Users - Independent user accounts');
        $this->command->info('✓ Students - Independent student records');
        $this->command->info('✓ Teachers - Independent teacher records');
        $this->command->info('✓ Roles - Simple role definitions');
        $this->command->info('✓ Courses - Academic course catalog');
        $this->command->info('✓ Schedules - Class scheduling information');
        $this->command->info('');
        $this->command->info('The simplified system is ready for development and testing!');
    }
}
