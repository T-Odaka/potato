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
                'name'    => 'からムーチョ',
            ],

        ]);
    }
}
