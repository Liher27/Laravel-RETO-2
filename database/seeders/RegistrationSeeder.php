<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('registrations')->insert([
            "id"=>"1",
            "user_id"=>"2",
            "registration_date"=>"2013-03-15",
            "school_year"=>"2"
        ]);

    }
}
