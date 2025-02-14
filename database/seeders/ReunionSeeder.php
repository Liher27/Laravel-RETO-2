<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReunionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reunions')->insert([
            "profesor_id"=>"1",
            "student_id"=>"2",
            "date"=>"2023-01-01", 
            "created_at"=>now(), 
        ]);  
    }   
}
