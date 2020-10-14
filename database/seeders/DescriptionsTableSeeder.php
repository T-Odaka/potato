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

            [
                'id' => 41,
                'description'    => '5',
                'image_url'      => '/img/pringles.jpg',
            ],

            [
                'id' => 51,
                'description'    => '6',
                'image_url'      => '/img/pringles.jpg',
            ],

            [
                'id' => 61,
                'description'    => '7',
                'image_url'      => '/img/pringles.jpg',
            ],

            [
                'id' => 71,
                'description'    => '8',
                'image_url'      => '/img/pringles.jpg',
            ],

            [
                'id' => 81,
                'description'    => '9',
                'image_url'      => '/img/pringles.jpg',
            ],

            [
                'id' => 91,
                'description'    => '10',
                'image_url'      => '/img/pringles.jpg',
            ],

        ]);
    }
}
