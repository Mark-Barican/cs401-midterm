<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'user_name' => 'admin',
            'password' => Hash::make('admin123'),
            'registration_date' => now(),
        ]);

        // Create test users
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_name' => 'johndoe',
            'password' => Hash::make('password123'),
            'registration_date' => now()->subDays(30),
        ]);

        User::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'user_name' => 'janesmith',
            'password' => Hash::make('password123'),
            'registration_date' => now()->subDays(45),
        ]);

        // Create additional random users from environment variable
        $userCount = env('SEED_USERS_COUNT', 20);
        User::factory($userCount)->create();

        $totalUsers = 3 + $userCount;
        $this->command->info("Created {$totalUsers} users: 3 test users + {$userCount} random users");
    }
} 