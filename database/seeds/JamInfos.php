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
            'id'=> 1,
            'popjam_id'=> 1,
            'area_id'=> 1,
            'created_at'=> '2020-07-22 12:00:00',
            'updated_at'=> '2020-07-22 12:00:00',
        ]);
    }
}
