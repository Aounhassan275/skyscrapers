<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('periods')->insert([
            [ 
                'name' => 'Period 1',
                'start_time' => '09 : 00 AM',
                'end_time' => '09 : 45 AM',
                'duration' => '45 Mintues',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' => 'Period 2',
                'start_time' => '09 : 45 AM',
                'end_time' => '10 : 30 AM',
                'duration' => '45 Mintues',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
