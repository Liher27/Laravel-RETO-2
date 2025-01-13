<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\hasFactory;

class SubjectSeeder extends Seeder
{


    use hasFactory;


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            "course_id"=>"1",
            "subject_name"=>"prueba",
            "subject_hours"=>"20",
            "created_at"=>now(),
            "updated_at"=>now(),
            "deleted_at"=>now(),
        ]);
    }
}
