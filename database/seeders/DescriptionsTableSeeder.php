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
                'description'    => '夕食後に何か食べたい時にオススメ。ピザ味の持つチーズとトマトの濃厚なソースが病みつきになること間違いなし。',
                'image_url'      => '/img/pizapotato.jpg',
            ],

            [
                'id' => 11,
                'description'    => '下仁田ねぎを使った贅沢なポテトチップス。ネギとガーリックのバランスが良くとれている。最近地元のスーパーから姿を消した。',
                'image_url'      => '/img/shimonitanegi.jpg',
            ],

            [
                'id' => 21,
                'description'    => '辛さだけでなくちょっぴり甘さを感じる味わい。150g大袋でも物足りなくなる時がある。大人数の時にこれを出すと外れない。',
                'image_url'      => '/img/karamucho.jpg',
            ],

            [
                'id' => 31,
                'description'    => 'オニオンと丁度いいしょっぱさ。細長いパッケージの上キャップがあり保管もしやすい。ゆっくり食べたい人には相性が良い。',
                'image_url'      => '/img/pringles.jpg',
            ],

            [
                'id' => 41,
                'description'    => 'ビネガーの持つ酸っぱさを活かしたチップス。油のくどさを打ち消しているため食べすぎ注意。梅と揃えると喜ばれる。',
                'image_url'      => '/img/salt-vinegar.png',
            ],

            [
                'id' => 51,
                'description'    => 'ビネガーより酸っぱい。他のポテチなどと袋を開けておくと大体先に無くなる。(個人的見解)　ビネガーと揃えよう。',
                'image_url'      => '/img/plum.png',
            ],

            [
                'id' => 61,
                'description'    => '味付けがされていないポテチ。罪悪感なしに平らげることができる。ウマい。逆に言えば好みの調味料でカスタマイズも可能。',
                'image_url'      => '/img/Unseasoned.jpg',
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
