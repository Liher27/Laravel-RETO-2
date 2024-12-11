<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\Subject;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class
        ]);

       User::factory(10)->create();
       Course::factory(10)->create();
       Subject::factory(10)->create();

       $this->call([
        ReunionSeeder::class,
        RegistrationSeeder::class,
        UserSubjectSeeder::class
        ]);
    }
}
