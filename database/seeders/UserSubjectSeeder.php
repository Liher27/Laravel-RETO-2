<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_subjects')->insert([
            "profesor_id"=>"2",
            "subject_id"=>"1",
            "day"=>"0",
            "hour"=>"3"
        ]); 
    }
}
