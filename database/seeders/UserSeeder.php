<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Arun Kumar',
                'email' => 'arun@example.com',
            ],
            [
                'name' => 'Divya Rani',
                'email' => 'divya@example.com',
            ],
            [
                'name' => 'Karthik Raja',
                'email' => 'karthik@example.com',
            ],
            [
                'name' => 'Priya Sharma',
                'email' => 'priya@example.com',
            ],
            [
                'name' => 'Vikram Singh',
                'email' => 'vikram@example.com',
            ],
            [
                'name' => 'Meena Lakshmi',
                'email' => 'meena@example.com',
            ],
            [
                'name' => 'Suresh Babu',
                'email' => 'suresh@example.com',
            ],
            [
                'name' => 'Nisha Kannan',
                'email' => 'nisha@example.com',
            ],
            [
                'name' => 'Rahul Das',
                'email' => 'rahul@example.com',
            ],
            [
                'name' => 'Deepa Nair',
                'email' => 'deepa@example.com',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
