<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([
            'name' => 'コンピュータ'
        ]);

        DB::table('categorys')->insert([
            'name' => '家電、AV、カメラ'
        ]);

        DB::table('categorys')->insert([
            'name' => '本、雑誌'
        ]);

        DB::table('categorys')->insert([
            'name' => '映画、ビデオ'
        ]);

        DB::table('categorys')->insert([
            'name' => 'おもちゃ、ゲーム'
        ]);

        DB::table('categorys')->insert([
            'name' => 'アンティーク、コレクション'
        ]);

        DB::table('categorys')->insert([
            'name' => 'スポーツ、レジャー'
        ]);

        DB::table('categorys')->insert([
            'name' => '自動車、オートバイ'
        ]);

        DB::table('categorys')->insert([
            'name' => 'ファッション'
        ]);

        DB::table('categorys')->insert([
            'name' => 'アクセサリー、時計'
        ]);

        DB::table('categorys')->insert([
            'name' => '食品、飲料'
        ]);

        DB::table('categorys')->insert([
            'name' => '住まい、インテリア'
        ]);

        DB::table('categorys')->insert([
            'name' => '事務、店舗用品'
        ]);

        DB::table('categorys')->insert([
            'name' => 'その他'
        ]);
    }
}
