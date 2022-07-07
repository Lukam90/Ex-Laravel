<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "User",
                "email" => "user@email.com",
                "role" => "user",
                "password" => bcrypt("password")
            ],
            [
                "name" => "Manager",
                "email" => "manager@email.com",
                "role" => "manager",
                "password" => bcrypt("password")
            ],
            [
                "name" => "Admin",
                "email" => "admin@email.com",
                "role" => "admin",
                "password" => bcrypt("password")
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
