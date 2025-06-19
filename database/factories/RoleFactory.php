<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition(): array
    {
        $roles = [
            ['name' => 'admin', 'description' => 'Administrator with full system access'],
            ['name' => 'teacher', 'description' => 'Teaching staff member'],
            ['name' => 'student', 'description' => 'Student user'],
            ['name' => 'staff', 'description' => 'General staff member'],
        ];

        $role = $this->faker->randomElement($roles);

        return [
            'role_name' => $role['name'],
            'description' => $role['description'],
        ];
    }
} 