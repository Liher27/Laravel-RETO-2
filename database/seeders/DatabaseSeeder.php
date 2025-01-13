<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;

use App\Models\User;
use App\Models\Role;
use App\Models\Role_User;
use App\Models\user_subject;
use App\Models\Course;
use App\Models\Subject;
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

        User::factory()->count(70)->create();

        $allusers = User::all();

        foreach($allusers as $user){
            if ($user->id == 1) {
                $user->roles()->attach(1);
            } elseif ($user->id > 1 && $user->id < 21) {
                $user->roles()->attach(3);
            } elseif ($user->id >= 21 || $user->id == 70) {
                $user->roles()->attach(4);
            }
        };

        Course::factory(10)->create();
        Subject::factory()->count(10)->sequence(
            ['course_id' => 1],
            ['course_id' => 2],
            ['course_id' => 3],
            ['course_id' => 4],
            ['course_id' => 5],
            ['course_id' => 6],
            ['course_id' => 7],
            ['course_id' => 8],
            ['course_id' => 9],
            ['course_id' => 10],
        )->create();
       
        user_subject::factory()->count(60)->sequence(
            ['profesor_id' => 1],
            ['profesor_id' => 2],
            ['profesor_id' => 3],
            ['profesor_id' => 4],
            ['profesor_id' => 5],
            ['profesor_id' => 6],
            ['profesor_id' => 7],
            ['profesor_id' => 8],
            ['profesor_id' => 9],
            ['profesor_id' => 10],
            ['profesor_id' => 11],
            ['profesor_id' => 12],
            ['profesor_id' => 13],
            ['profesor_id' => 14],
            ['profesor_id' => 15],
            ['profesor_id' => 16],
            ['profesor_id' => 17],
            ['profesor_id' => 18],
            ['profesor_id' => 19],
            ['profesor_id' => 20],
        )->create();

        $this->call([
        ReunionSeeder::class,
        RegistrationSeeder::class,
        ]);
    }
}
