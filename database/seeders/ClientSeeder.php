<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            "name"=>"Jose luis",
            "surname"=>"Gonzalez",
            "address"=>"Calle perico",
            "dni"=>"123456789A",
            "number"=>123456789,
        ]);
    }
}
