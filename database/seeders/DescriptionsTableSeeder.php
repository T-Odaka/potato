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
                'id' => 1,
                'description'    => '1',
                'image_url'      => '/img/pizapotato.jpg',
            ],

            [
                'id' => 11,
                'description'    => '2',
                'image_url'      => '/img/shimonitanegi.jpg',
            ],

            [
                'id' => 21,
                'description'    => '3',
                'image_url'      => '/img/karamucho.jpg',
            ],

            [
                'id' => 31,
                'description'    => '4',
                'image_url'      => '/img/pringles.jpg',
            ],

        ]);
    }
}
