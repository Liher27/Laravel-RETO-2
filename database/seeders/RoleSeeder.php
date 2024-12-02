<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::table('roles')->insert([
            "role_name"=>"god"
        ]);
        DB::table('roles')->insert([
            "role_name"=>"admin"
        ]);
        DB::table('roles')->insert([
            "role_name"=>"profesor"
        ]);
        DB::table('roles')->insert([
            "role_name"=>"alumno"
        ]);
    }
}