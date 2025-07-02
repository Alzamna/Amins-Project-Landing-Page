<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User - check if exists first
        if (!User::where('email', 'admin@aminsproject.com')->exists()) {
            User::create([
                'name' => 'Administrator',
                'email' => 'admin@aminsproject.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]);
            $this->command->info('Admin user created: admin@aminsproject.com');
        } else {
            $this->command->info('Admin user already exists: admin@aminsproject.com');
        }

        // Create additional admin user
        if (!User::where('email', 'superadmin@aminsproject.com')->exists()) {
            User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@aminsproject.com',
                'password' => Hash::make('superadmin123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]);
            $this->command->info('Super Admin user created: superadmin@aminsproject.com');
        } else {
            $this->command->info('Super Admin user already exists: superadmin@aminsproject.com');
        }

        // Create regular users for testing
        $regularUsers = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Bob Wilson',
                'email' => 'bob@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
        ];

        foreach ($regularUsers as $userData) {
            if (!User::where('email', $userData['email'])->exists()) {
                User::create(array_merge($userData, [
                    'email_verified_at' => now(),
                ]));
                $this->command->info('User created: ' . $userData['email']);
            } else {
                $this->command->info('User already exists: ' . $userData['email']);
            }
        }
    }
}