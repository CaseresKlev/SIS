<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->create();
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);
        // \App\Models\Student::factory(200)->create();
        // \App\Models\Student::factory(200)->create();
    }
}
