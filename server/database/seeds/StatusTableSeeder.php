<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->truncate();
        DB::table('statuses')->insert([
            'name' => '新品、未使用'
        ]);

        DB::table('statuses')->insert([
            'name' => '未使用に近い'
        ]);

        DB::table('statuses')->insert([
            'name' => '目立った傷や汚れなし'
        ]);

        DB::table('statuses')->insert([
            'name' => 'やや傷や汚れあり'
        ]);

        DB::table('statuses')->insert([
            'name' => '傷や汚れあり'
        ]);

        DB::table('statuses')->insert([
            'name' => '全体的に状態が悪い'
        ]);
    }
}
