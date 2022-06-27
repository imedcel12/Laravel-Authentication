<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'name' => 'Edcel E. Moreno',
                'email' => 'edceledcel12345@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password12345')
            ],
            [
                'name' => 'Jason B. Hernandez',
                'email' => 'jayson@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password12345')
            ],
            [
                'name' => 'Henry C. Yu',
                'email' => 'henry_yu@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password12345')
            ],
            [
                'name' => 'Josh Lintana',
                'email' => 'lintanajosh@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password12345')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
