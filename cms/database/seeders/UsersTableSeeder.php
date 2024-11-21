<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //データを一度クリアする
        DB::table('users')->truncate();
        // データを登録する
        DB::table('users')->insert([
        ['name' => 'admin',
        'email' => 'admin@example.com',
        'password' => 'adminpass',
        ],
        [
        'name' => 'member',
        'email' => 'member@example.com',
        'password' => 'memberpass',
        ],
        [
        'name' => 'creator',
        'email' => 'creator@example.com',
        'password' => 'creatorpass',
        ]
    ]);
 }
}
