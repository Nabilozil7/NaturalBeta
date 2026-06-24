<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123456'),
            'role' => 'admin',
            'phone' => '08123456789',
            'address' => 'Tangerang',
            'photo' => 'admindefault.png',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone' => '08111111111',
            'address' => 'jakarta',
        ]);
    }
}