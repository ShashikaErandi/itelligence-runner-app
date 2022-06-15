<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class RunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('runs')->insert([
            'title' => 'Test Run 1',
            'start_date_time' => Carbon::now()->subDays(rand(1, 20)),
            'length' => 200,
            'type' => 1,
        ]);

        DB::table('runs')->insert([
            'title' => 'Test Run 2',
            'start_date_time' => Carbon::now()->subDays(rand(1, 4)),
            'length' => 200,
            'type' => 2,
        ]);

        DB::table('runs')->insert([
            'title' => 'Test Run 3',
            'start_date_time' => Carbon::now(),
            'length' => 200,
            'type' => 3,
        ]);

        DB::table('runs')->insert([
            'title' => 'Test Run 4',
            'start_date_time' => Carbon::now()->addMonth(),
            'length' => 200,
            'type' => 3,
        ]);
    }
}
