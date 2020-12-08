<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sells')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('sells')->insert([
            'name' => 'フィルムカメラ',
            'detail' => '1960年式のカメラです',
            'price' => 200000,
            'imgpath' => 'filmcamera.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'イヤホン',
            'detail' => 'ノイズキャンセリングがついてます',
            'price' => 20000,
            'imgpath' => 'iyahon.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '時計',
            'detail' => '1980年式の掛け時計です',
            'price' => 120000,
            'imgpath' => 'clock.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '地球儀',
            'detail' => '珍しい商品です',
            'price' => 120000,
            'imgpath' => 'earth.jpg',
        ]);


        DB::table('sells')->insert([
            'name' => '腕時計',
            'detail' => 'プレゼントにどうぞ',
            'price' => 9800,
            'imgpath' => 'watch.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式です',
            'price' => 79800,
            'imgpath' => 'lens.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'シャンパン',
            'detail' => 'パーティにどうぞ',
            'price' => 800,
            'imgpath' => 'shanpan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'ビール',
            'detail' => '大量生産されたビールです',
            'price' => 200,
            'imgpath' => 'beer.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'やかん',
            'detail' => 'かなり珍しいやかんです',
            'price' => 1200,
            'imgpath' => 'yakan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '精米',
            'detail' => '米30Kgです',
            'price' => 11200,
            'imgpath' => 'kome.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'パソコン',
            'detail' => 'ジャンク品です',
            'price' => 11200,
            'imgpath' => 'pc.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'アコースティックギター',
            'detail' => 'ヤマハ製のエントリーモデルです',
            'price' => 25600,
            'imgpath' => 'aguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'エレキギター',
            'detail' => '初心者向けのエントリーモデルです',
            'price' => 15600,
            'imgpath' => 'eguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '加湿器',
            'detail' => '乾燥する季節の必需品',
            'price' => 3200,
            'imgpath' => 'steamer.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'マウス',
            'detail' => 'ゲーミングマウスです',
            'price' => 4200,
            'imgpath' => 'mouse.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Android Garxy10',
            'detail' => '中古美品です',
            'price' => 84200,
            'imgpath' => 'mobile.jpg',
        ]);
    }
}
