<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
   
    public function run(): void
    {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('password'),
            ]);  
            
            User::create([
                'name' => 'Guru',
                'email' => 'guru@mail.com',
                'password' => bcrypt('password'),
            ]);   
    }
}
