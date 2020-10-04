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
                'hot'    => 1,
                'crispy'      => 1,
                'garlic'      => 1,
                'salt'      => 1,
            ],

            [
                'hot'    => 2,
                'crispy'      => 2,
                'garlic'      => 2,
                'salt'      => 2,
            ],

            [
                'hot'    => 3,
                'crispy'      => 3,
                'garlic'      => 3,
                'salt'      => 3,
            ],

        ]);
    }
}
