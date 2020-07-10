<?php

use Illuminate\Database\Seeder;

class PopJamRates extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //人口集中率
        DB::table('pop_jam_rates')->insert([
            'id' => 1,
            'population'=> 2000,
            'area_id'=> 1,
            'pop_jam_rate'=> 1.13,
            'created_at' => '2020-07-22 12:00:00'
        ]);
    }
}
