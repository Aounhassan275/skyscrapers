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
        $this->call(UserSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(TeacherClassSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(PeriodSeeder::class);
        $this->call(TeacherScheduleSeeder::class);
    }
}
