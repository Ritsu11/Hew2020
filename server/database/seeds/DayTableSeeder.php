<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'name' => '１〜２日で発送'
        ]);

        DB::table('days')->insert([
            'name' => '２〜３日で発送'
        ]);
        DB::table('days')->insert([
            'name' => '４〜７日で発送'
        ]);
    }
}
