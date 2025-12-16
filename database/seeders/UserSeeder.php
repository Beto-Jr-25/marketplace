<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Beto Jr',
                'username' => 'Beto',
                'email' => 'famosobom3@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('S25PHP#')
            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'famosobom5@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('S25PHP#')
            ],
            [
                'name' => 'Cliente user',
                'username' => 'user',
                'email' => 'famosobom5C@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('S25PHP#')
            ]
        ]);
    }
}
