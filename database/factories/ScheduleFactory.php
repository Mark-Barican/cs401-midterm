<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;

    public function definition(): array
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        
        return [
            'day_of_week' => $this->faker->randomElement($days),
            'time_slot' => $this->faker->dateTimeBetween('today', '+1 week'),
            'room' => 'Room ' . $this->faker->numberBetween(100, 999),
            'term' => $this->faker->numberBetween(1, 4),
        ];
    }
} 