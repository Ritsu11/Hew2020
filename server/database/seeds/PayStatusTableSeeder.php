<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paystatuses')->insert([
            'name' => '送料込み'
        ]);

        DB::table('paystatuses')->insert([
            'name' => '着払い'
        ]);
    }
}
