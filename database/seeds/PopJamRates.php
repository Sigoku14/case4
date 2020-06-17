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
        DB::table('PopJamRates')->insert([
            'id' => 1,
            'population'=> 2000,
            'area_id'=> 1,
            'pop_jam'=> 1.13,
            'created_at' => 'Fri Jun 12 16:50:47 +0000 2020'
        ]);
    }
}
