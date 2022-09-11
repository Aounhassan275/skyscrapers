<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('schedules')->insert([
            [ 
                'class_id' => '1',
                'subject_id' => '1',
                'period_id' => '1',
                'display_order' => 1,
                'teacher_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'class_id' => '2',
                'subject_id' => '2',
                'period_id' => '2',
                'display_order' => 1,
                'teacher_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
