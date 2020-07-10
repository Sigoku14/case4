<?php

use Illuminate\Database\Seeder;

class JamPredicts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //混雑予想
        DB::table('jam_predicts')->insert([
            'id'=>1,
            'popjam_id'=> 1,
            'area_id'=> 1,
            'predicts_date'=> '2020-07-22 12:00:00',
            'created_at' => '2020-07-22 12:00:00',
            'updated_at'=> '2020-07-22 12:00:00'
        ]);
    }
}
