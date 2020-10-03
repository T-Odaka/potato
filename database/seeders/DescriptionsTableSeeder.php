<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descriptions')->insert([
            [
                'description'    => '1',
                'image_url'      => '1',
            ],

            [
                'description'    => '2',
                'image_url'      => '2',
            ],

            [
                'description'    => '3',
                'image_url'      => '3',
            ],

        ]);
    }
}
