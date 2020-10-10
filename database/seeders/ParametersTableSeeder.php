<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParametersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parameters')->insert([
            [
                'id' => 1,
                'hot'    => 1,
                'crispy'      => 3,
                'garlic'      => 2,
                'salt'      => 2,
            ],

            [
                'id' => 11,
                'hot'    => 0,
                'crispy'      => 3,
                'garlic'      => 4,
                'salt'      => 3,
            ],

            [
                'id' => 21,
                'hot'    => 4,
                'crispy'      => 3,
                'garlic'      => 3,
                'salt'      => 2,
            ],

            [
                'id' => 31,
                'hot'    => 0,
                'crispy'      => 4,
                'garlic'      => 4,
                'salt'      => 4,
            ],

        ]);
    }
}
