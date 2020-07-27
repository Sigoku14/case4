<?php

use Illuminate\Database\Seeder;

class Locations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //場所
        DB::table('locations')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => '梅田駅',
                'latitude' => 135.495734,
                'longitude' => 34.700559
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'name' => '北新地',
                'latitude' => 135.496276,
                'longitude' => 34.698398
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'name' => '淀屋橋駅',
                'latitude' => 135.501493,
                'longitude' => 34.692142
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'name' => '渡辺橋駅',
                'latitude' => 135.494671,
                'longitude' => 34.693688
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'name' => '堂島',
                'latitude' => 135.494261,
                'longitude' => 34.696269
            ],
            [
                'id' => 6,
                'user_id' => 1,
                'name' => '西梅田駅',
                'latitude' => 135.49556,
                'longitude' => 34.699882
            ],
            [
                'id' => 7,
                'user_id' => 1,
                'name' => '大阪四季劇場',
                'latitude' => 135.494686,
                'longitude' => 34.699654
            ],
            [
                'id' => 8,
                'user_id' => 1,
                'name' => 'HAL大阪',
                'latitude' => 135.493032,
                'longitude' => 34.699875
            ],
            [
                'id' => 9,
                'user_id' => 1,
                'name' => '大阪中央病院',
                'latitude' => 135.491177,
                'longitude' => 34.699103
            ],
            [
                'id' => 10,
                'user_id' => 1,
                'name' => '大阪福島駅',
                'latitude' => 135.48686,
                'longitude' => 34.697241
            ],

        ]);
    }
}
