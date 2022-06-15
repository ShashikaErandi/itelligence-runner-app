<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class RunnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('runners')->insert([
            'name' => 'Test Runner 1',
            'email' => 'admin',
        ]);

        DB::table('runners')->insert([
            'name' => 'Test Runner 2',
            'email' => 'admin',
        ]);
    }
}
