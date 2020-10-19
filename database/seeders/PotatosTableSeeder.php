<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PotatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('potatos')->insert([
            [
                'name'    => 'ピザポテト',
            ],

            [
                'name'    => '下仁田ねぎポテトチップス',
            ],

            [
                'name'    => 'カラムーチョ',
            ],

            [
                'name'    => 'プリングルズ サワークリームオニオン',
            ],

            [
                'name'    => 'すっぱムーチョ さっぱりビネガー',
            ],

            [
                'name'    => 'すっぱムーチョ さっぱり梅',
            ],

            [
                'name'    => 'ポテトの素顔',
            ],

            [
                'name'    => 'テスト8',
            ],

            [
                'name'    => 'テスト9',
            ],

            [
                'name'    => 'テスト10',
            ],

        ]);
    }
}
