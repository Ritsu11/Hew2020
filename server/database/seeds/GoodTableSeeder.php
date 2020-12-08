<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->truncate();
        DB::table('goods')->insert([
            'id' => 1,
            'sell_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('goods')->insert([
            'id' => 2,
            'sell_id' => 2,
            'user_id' => 2,
        ]);
    }
}
