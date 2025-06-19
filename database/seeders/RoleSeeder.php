<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default system roles
        $roles = [
            [
                'role_name' => 'admin',
                'description' => 'Administrator with full system access',
            ],
            [
                'role_name' => 'teacher',
                'description' => 'Teaching staff member',
            ],
            [
                'role_name' => 'student',
                'description' => 'Student user',
            ],
            [
                'role_name' => 'staff',
                'description' => 'General staff member',
            ],
        ];

        foreach ($roles as $roleData) {
            Role::firstOrCreate(
                ['role_name' => $roleData['role_name']],
                $roleData
            );
        }

        // Get counts from environment variables with defaults
        $additionalRolesCount = env('SEED_ROLES_COUNT', 0);

        // Create additional random roles if specified
        if ($additionalRolesCount > 0) {
            Role::factory($additionalRolesCount)->create();
        }

        $totalRoles = 4 + $additionalRolesCount;
        $this->command->info("Created {$totalRoles} roles: 4 system roles + {$additionalRolesCount} additional roles");
    }
} 