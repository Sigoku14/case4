<?php

use Illuminate\Database\Seeder;

class JamInfos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //混雑情報
        DB::table('jam_infos')->insert([
            [
                'id' => 1,
                'name' => '梅田駅',
                'latitude' => 35.006662,
                'longitude' => 138.487433,
                'created_at' => '2020-07-22 12:00:00'
            ],
        ]);
    }
}
