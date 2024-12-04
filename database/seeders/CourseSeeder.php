<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            "course_name"=>"DAM"
        ]);
        DB::table('courses')->insert([
            "course_name"=>"ASIR"
        ]);
        DB::table('courses')->insert([
            "course_name"=>"DAW"
        ]);
        DB::table('courses')->insert([
            "course_name"=>"AQUE"
        ]);
    }
}
