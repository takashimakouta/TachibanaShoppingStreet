<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FurnitureGoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
       DB::table('furnituregoods')->truncate(); //2回目実行の際にシーダー情報をクリア
       DB::table('furnituregoods')->insert([
           'id' => '1',
           'item_name' => 'フィルムカメラ',
           'item_amount' => 200000,
           'item_explain' => '1960年式のカメラです',
           'item_img' => 'filmcamera.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '2',
           'item_name' => 'イヤホン',
           'item_amount' => 20000,
           'item_explain' => 'ノイズキャンセリングがついてます',
           'item_img' => 'iyahon.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '3',
           'item_name' => '時計',
           
           'item_amount' => 120000,
           'item_explain' => '1980年式の掛け時計です',
           'item_img' => 'clock.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '4',
           'item_name' => '地球儀',
           'item_amount' => 120000,
           'item_explain' => '珍しい商品です',
           'item_img' => 'earth.jpg',
       ]);


       DB::table('furnituregoods')->insert([
           'id' => '5',
           'item_name' => '腕時計',
           'item_amount' => 9800,
           'item_explain' => 'プレゼントにどうぞ',
           'item_img' => 'watch.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '6',
           'item_name' => 'カメラレンズ35mm',
           'item_amount' => 79800,
           'item_explain' => '最新式です',
           'item_img' => 'lens.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '7',
           'item_name' => 'シャンパン',
           'item_amount' => 800,
           'item_explain' => 'パーティにどうぞ',
           'item_img' => 'shanpan.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '8',
           'item_name' => 'ビール',
           'item_amount' => 200,
           'item_explain' => '大量生産されたビールです',
           'item_img' => 'beer.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '9',
           'item_name' => 'やかん',
           'item_amount' => 1200,
           'item_explain' => 'かなり珍しいやかんです',
           'item_img' => 'yakan.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '10',
           'item_name' => '精米',
           'item_amount' => 11200,
           'item_explain' => '米30Kgです',
           'item_img' => 'kome.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '11',
           'item_name' => 'パソコン',
           'item_amount' => 11200,
           'item_explain' => 'ジャンク品です',
           'item_img' => 'pc.jpg'
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '12',
           'item_name' => 'アコースティックギター',
           
           'item_amount' => 25600,
           'item_explain' => 'ヤマハ製のエントリーモデルです',
           'item_img' => 'aguiter.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '13',
           'item_name' => 'エレキギター',
           'item_explain' => '初心者向けのエントリーモデルです',
           'item_amount' => 15600,
           'item_img' => 'eguiter.jpg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '14',
           'item_name' => '加湿器',
           'item_amount' => 3200,
           'item_explain' => '乾燥する季節の必需品',
           'item_img' => 'steamer.jpeg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '15',
           'item_name' => 'マウス',
           'item_amount' => 4200,
           'item_explain' => 'ゲーミングマウスです',
           'item_img' => 'mouse.jpeg',
       ]);

       DB::table('furnituregoods')->insert([
           'id' => '16',
           'item_name' => 'Android Garxy10',
           'item_amount' => 84200,
           'item_explain' => '中古美品です',
           'item_img' => 'mobile.jpg',
       ]);
    }
}
