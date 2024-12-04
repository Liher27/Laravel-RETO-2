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
             "name"=>"Jose",
             "email"=>"jose@gmail.com",
             "email_verified_at"=>"2013-03-15",
             "password"=>"1234",
             "direction"=>"1234",
             "DNI"=>"1234",
          "Telephone"=>"123456789",
            "role_id"=>"1"
         ]);
        /*DB::table('users')->insert([
            "name"=>"Luis",
            "email"=>"luis@gmail.com",
            "email_verified_at"=>"2014-11-12",
            "password"=>"1234",
            "direction"=>"bernat etxepare",
            "DNI"=>"12341234A",
            "Telephone"=>"123456789",
            "role_id"=>"2"
        ]);*/
    }
}