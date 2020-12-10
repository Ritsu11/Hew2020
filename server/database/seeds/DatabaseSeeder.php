<?php

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
        $this->call(SellTableSeeder::class);
        $this->call(GoodTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(PayStatusTableSeeder::class);
        $this->call(DayTableSeeder::class);
        $this->call(AreaTableSeeder::class);
    }
}
