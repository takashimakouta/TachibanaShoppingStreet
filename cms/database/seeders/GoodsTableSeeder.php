<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        
    DB::table('goods')->truncate();
       
    // データを登録する
    DB::table('goods')->insert([
        ['id' => '1',
        'item_name' => 'テスト本１',
        'item_amount' => 1000,
        'item_img' => 'test.jpg',
        'item_explain' => 'よろしくお願いいたします',
         ],
         [
        'id' => '2',
        'item_name' => 'テスト本2',
        'item_amount' => 2000,
        'item_img' => 'test1.jpg',
        'item_explain' => 'よろしくお願いいたします',
        ]
    ]);
    }
}
