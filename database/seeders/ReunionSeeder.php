<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReunionSeeder extends Seeder
{
    public function run(): void {
        DB::table('reunions')->insert([
            "professor_id"=>"1",
            "reunion_date"=>now(),
        ]);
    }
}
