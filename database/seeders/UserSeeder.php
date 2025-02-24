<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use App\Models\User; // Correct namespace for the User model
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Security',
            'email' => 'security@example.com',
            'password' => Hash::make('password'),
            'role' => 'security',
        ]);

        User::create([
            'name' => 'Resident',
            'email' => 'resident@example.com',
            'password' => Hash::make('password'),
            'role' => 'resident',
        ]);
    }
}