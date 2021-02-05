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
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 200000,
            'imgpath' => 'image/filmcamera.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'イヤホン',
            'detail' => 'ノイズキャンセリングがついてます',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 20000,
            'imgpath' => 'image/iyahon.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '時計',
            'detail' => '1980年式の掛け時計です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 32,
            'day_id' => 1,
            'price' => 120000,
            'imgpath' => 'image/clock.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '地球儀',
            'detail' => '珍しい商品です',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 12,
            'day_id' => 1,
            'price' => 120000,
            'imgpath' => 'image/earth.jpg',
        ]);


        DB::table('sells')->insert([
            'name' => '腕時計',
            'detail' => 'プレゼントにどうぞ',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 9800,
            'imgpath' => 'image/watch.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 79800,
            'imgpath' => 'image/lens.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'シャンパン',
            'detail' => 'パーティにどうぞ',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 800,
            'imgpath' => 'image/shanpan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'ビール',
            'detail' => '大量生産されたビールです',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 200,
            'imgpath' => 'image/beer.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'やかん',
            'detail' => 'かなり珍しいやかんです',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 1200,
            'imgpath' => 'image/yakan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '精米',
            'detail' => '米30Kgです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 11200,
            'imgpath' => 'image/kome.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'パソコン',
            'detail' => 'ジャンク品です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 11200,
            'imgpath' => 'image/pc.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'アコースティックギター',
            'detail' => 'ヤマハ製のエントリーモデルです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 25600,
            'imgpath' => 'image/aguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'エレキギター',
            'detail' => '初心者向けのエントリーモデルです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 15600,
            'imgpath' => 'image/eguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '加湿器',
            'detail' => '乾燥する季節の必需品',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 3200,
            'imgpath' => 'image/steamer.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'マウス',
            'detail' => 'ゲーミングマウスです',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 4200,
            'imgpath' => 'image/mouse.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Android Garxy10',
            'detail' => '中古美品です',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 84200,
            'imgpath' => 'image/mobile.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'フィルムカメラ',
            'detail' => '1960年式のカメラです',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 200000,
            'imgpath' => 'image/filmcamera.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'イヤホン',
            'detail' => 'ノイズキャンセリングがついてます',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 20000,
            'imgpath' => 'image/iyahon.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '時計',
            'detail' => '1980年式の掛け時計です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 32,
            'day_id' => 1,
            'price' => 120000,
            'imgpath' => 'image/clock.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '地球儀',
            'detail' => '珍しい商品です',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 12,
            'day_id' => 1,
            'price' => 120000,
            'imgpath' => 'image/earth.jpg',
        ]);


        DB::table('sells')->insert([
            'name' => '腕時計',
            'detail' => 'プレゼントにどうぞ',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 9800,
            'imgpath' => 'image/watch.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 79800,
            'imgpath' => 'image/lens.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'シャンパン',
            'detail' => 'パーティにどうぞ',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 800,
            'imgpath' => 'image/shanpan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'ビール',
            'detail' => '大量生産されたビールです',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 200,
            'imgpath' => 'image/beer.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'やかん',
            'detail' => 'かなり珍しいやかんです',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 1200,
            'imgpath' => 'image/yakan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '精米',
            'detail' => '米30Kgです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 11200,
            'imgpath' => 'image/kome.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'パソコン',
            'detail' => 'ジャンク品です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 11200,
            'imgpath' => 'image/pc.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'アコースティックギター',
            'detail' => 'ヤマハ製のエントリーモデルです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 25600,
            'imgpath' => 'image/aguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'エレキギター',
            'detail' => '初心者向けのエントリーモデルです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 15600,
            'imgpath' => 'image/eguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '加湿器',
            'detail' => '乾燥する季節の必需品',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 3200,
            'imgpath' => 'image/steamer.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'マウス',
            'detail' => 'ゲーミングマウスです',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 4200,
            'imgpath' => 'image/mouse.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Android Garxy10',
            'detail' => '中古美品です',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 84200,
            'imgpath' => 'image/mobile.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'フィルムカメラ',
            'detail' => '1960年式のカメラです',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 200000,
            'imgpath' => 'image/filmcamera.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'イヤホン',
            'detail' => 'ノイズキャンセリングがついてます',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 20000,
            'imgpath' => 'image/iyahon.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '時計',
            'detail' => '1980年式の掛け時計です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 32,
            'day_id' => 1,
            'price' => 120000,
            'imgpath' => 'image/clock.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '地球儀',
            'detail' => '珍しい商品です',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 12,
            'day_id' => 1,
            'price' => 120000,
            'imgpath' => 'image/earth.jpg',
        ]);


        DB::table('sells')->insert([
            'name' => '腕時計',
            'detail' => 'プレゼントにどうぞ',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 9800,
            'imgpath' => 'image/watch.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 79800,
            'imgpath' => 'image/lens.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'シャンパン',
            'detail' => 'パーティにどうぞ',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 800,
            'imgpath' => 'image/shanpan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'ビール',
            'detail' => '大量生産されたビールです',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 200,
            'imgpath' => 'image/beer.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'やかん',
            'detail' => 'かなり珍しいやかんです',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 1200,
            'imgpath' => 'image/yakan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '精米',
            'detail' => '米30Kgです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 11200,
            'imgpath' => 'image/kome.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'パソコン',
            'detail' => 'ジャンク品です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 11200,
            'imgpath' => 'image/pc.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'アコースティックギター',
            'detail' => 'ヤマハ製のエントリーモデルです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 25600,
            'imgpath' => 'image/aguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'エレキギター',
            'detail' => '初心者向けのエントリーモデルです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 15600,
            'imgpath' => 'image/eguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '加湿器',
            'detail' => '乾燥する季節の必需品',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 3200,
            'imgpath' => 'image/steamer.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'マウス',
            'detail' => 'ゲーミングマウスです',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 4200,
            'imgpath' => 'image/mouse.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Android Garxy10',
            'detail' => '中古美品です',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 84200,
            'imgpath' => 'image/mobile.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'フィルムカメラ',
            'detail' => '1960年式のカメラです',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 200000,
            'imgpath' => 'image/filmcamera.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'イヤホン',
            'detail' => 'ノイズキャンセリングがついてます',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 20000,
            'imgpath' => 'image/iyahon.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '時計',
            'detail' => '1980年式の掛け時計です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 32,
            'day_id' => 1,
            'price' => 120000,
            'imgpath' => 'image/clock.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '地球儀',
            'detail' => '珍しい商品です',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 12,
            'day_id' => 1,
            'price' => 120000,
            'imgpath' => 'image/earth.jpg',
        ]);


        DB::table('sells')->insert([
            'name' => '腕時計',
            'detail' => 'プレゼントにどうぞ',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 9800,
            'imgpath' => 'image/watch.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 79800,
            'imgpath' => 'image/lens.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'シャンパン',
            'detail' => 'パーティにどうぞ',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 800,
            'imgpath' => 'image/shanpan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'ビール',
            'detail' => '大量生産されたビールです',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 200,
            'imgpath' => 'image/beer.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'やかん',
            'detail' => 'かなり珍しいやかんです',
            'user_id' => 3,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 1200,
            'imgpath' => 'image/yakan.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '精米',
            'detail' => '米30Kgです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 11200,
            'imgpath' => 'image/kome.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'パソコン',
            'detail' => 'ジャンク品です',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 11200,
            'imgpath' => 'image/pc.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'アコースティックギター',
            'detail' => 'ヤマハ製のエントリーモデルです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 25600,
            'imgpath' => 'image/aguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'エレキギター',
            'detail' => '初心者向けのエントリーモデルです',
            'user_id' => 2,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 15600,
            'imgpath' => 'image/eguiter.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => '加湿器',
            'detail' => '乾燥する季節の必需品',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 3200,
            'imgpath' => 'image/steamer.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'マウス',
            'detail' => 'ゲーミングマウスです',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 4200,
            'imgpath' => 'image/mouse.jpeg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Android Garxy10',
            'detail' => '中古美品です',
            'user_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'paystatus_id' => 1,
            'area_id' => 34,
            'day_id' => 1,
            'price' => 84200,
            'imgpath' => 'image/mobile.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Apple macbook air 2019 i7',
            'detail' => '新しいものを購入したため出品します。写真の通り、四隅に凹みがあります。また、十字キーの↑を紛失しています。（指で押せば反応するので使える状態ではあります）バッテリーが消耗しており、充電せずに使うと１日持ちません。充電しながら使えば問題なく使用できます。中古品なので神経質な方はご遠慮ください。',
            'user_id' => 3,
            'category_id' => 1,
            'status_id' => 1,
            'paystatus_id' => 2,
            'area_id' => 23,
            'day_id' => 2,
            'price' => 103000,
            'imgpath' => 'image/1.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Nec ノート',
            'detail' => '新しいものを購入したため出品します。四隅に凹みがあります。また、十字キーの↑を紛失しています。（指で押せば反応するので使える状態ではあります）バッテリーが消耗しており、充電せずに使うと１日持ちません。充電しながら使えば問題なく使用できます。中古品なので神経質な方はご遠慮ください。',
            'user_id' => 2,
            'category_id' => 1,
            'status_id' => 4,
            'paystatus_id' => 2,
            'area_id' => 1,
            'day_id' => 1,
            'price' => 60300,
            'imgpath' => 'image/2.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Nec デスクトップ',
            'detail' => '新しいものを購入したため出品します。十字キーの↑を紛失しています。（指で押せば反応するので使える状態ではあります）バッテリーが消耗しており、充電せずに使うと１日持ちません。充電しながら使えば問題なく使用できます。中古品なので神経質な方はご遠慮ください。',
            'user_id' => 1,
            'category_id' => 1,
            'status_id' => 2,
            'paystatus_id' => 2,
            'area_id' => 32,
            'day_id' => 1,
            'price' => 50300,
            'imgpath' => 'image/3.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'Nec Levie',
            'detail' => '出品します。写真の通り、四隅に凹みがあります。また、十字キーの↑を紛失しています。（指で押せば反応するので使える状態ではあります）バッテリーが消耗しており、充電せずに使うと１日持ちません。充電しながら使えば問題なく使用できます。中古品なので神経質な方はご遠慮ください。',
            'user_id' => 3,
            'category_id' => 1,
            'status_id' => 1,
            'paystatus_id' => 2,
            'area_id' => 41,
            'day_id' => 2,
            'price' => 210300,
            'imgpath' => 'image/4.jpg',
        ]);

        DB::table('sells')->insert([
            'name' => 'ThinkPad',
            'detail' => '新しいものを購入したため出品します。写真の通り、四隅に凹みがあります。また、十字キーの↑を紛失しています。（指で押せば反応するので使える状態ではあります）バッテリーが消耗しており、充電せずに使うと１日持ちません。充電しながら使えば問題なく使用できます。中古品なので神経質な方はご遠慮ください。',
            'user_id' => 3,
            'category_id' => 1,
            'status_id' => 1,
            'paystatus_id' => 2,
            'area_id' => 23,
            'day_id' => 2,
            'price' => 31300,
            'imgpath' => 'image/5.jpg',
        ]);
    }
}
