<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific test schedules
        Schedule::create([
            'day_of_week' => 'Monday',
            'time_slot' => '2024-12-19 09:00:00',
            'room' => 'Room 101',
            'term' => 1,
        ]);

        Schedule::create([
            'day_of_week' => 'Tuesday',
            'time_slot' => '2024-12-19 14:00:00',
            'room' => 'Room 201',
            'term' => 1,
        ]);

        Schedule::create([
            'day_of_week' => 'Wednesday',
            'time_slot' => '2024-12-19 11:00:00',
            'room' => 'Room 301',
            'term' => 1,
        ]);

        // Get counts from environment variables with defaults
        $totalSchedules = env('SEED_SCHEDULES_COUNT', 53);

        // Create additional random schedules
        Schedule::factory($totalSchedules)->create();

        $totalCreated = 3 + $totalSchedules;
        $this->command->info("Created {$totalCreated} schedules: 3 test schedules + {$totalSchedules} random schedules");
    }
} 