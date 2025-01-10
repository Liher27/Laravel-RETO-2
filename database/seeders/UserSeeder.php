<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
            "name"=>"Jesus",
            "email"=>"Jesus@gmail.com",
            "email_verified_at"=>"2013-03-15",
            "password"=>"12345678",
            "direction"=>"12345678",
            "DNI"=>"1234",
            "Telephone"=>"123456789"
        ]);
    }
}
