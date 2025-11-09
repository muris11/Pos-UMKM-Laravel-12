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
        $users = [
            [
                'name' => 'Owner',
                'email' => 'owner@demo',
                'password' => Hash::make('demo123'),
                'role' => 'owner',
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@demo',
                'password' => Hash::make('demo123'),
                'role' => 'manager',
            ],
            [
                'name' => 'Cashier',
                'email' => 'cashier@demo',
                'password' => Hash::make('demo123'),
                'role' => 'cashier',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}