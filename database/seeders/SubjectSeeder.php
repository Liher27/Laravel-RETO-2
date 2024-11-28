<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('subjects')->insert([
        "subject_name"=>"moviles",
        "user_id"=>"2",
        "resgitration_date"=>"2024-11-28",
        "subject_hours"=>"20"
     ]);   
    }
}
