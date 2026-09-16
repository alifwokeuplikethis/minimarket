<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'email' => 'adminngawi@gmail.com',
        ]);

        User::create([
            'name' => 'user',
            'password' => Hash::make('123456'),
            'role' => 'user',
            'email' => 'usermojokerto@gmail.com',
        ]);
    }
}