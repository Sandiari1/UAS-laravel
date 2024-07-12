<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; //this line is import db function 



class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [   
                'name' => 'sandi',
                'email' => 'muzakiari2@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => '12345678',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'sandi',
                'email' => 'muzakiari2@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => '12345678',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
