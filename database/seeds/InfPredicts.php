<?php

use Illuminate\Database\Seeder;

class InfPredicts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //感染予測
        DB::table('InfPredicts')->insert([
            'id'=> 1,
            'infection_id'=> 1,
            'area_id'=> 3,
            'created_at'=> '2020/06/19 08:00:00.0',
            'update_at'=> '2020/06/19 12:00:00.0'
        ]);

        DB::table('InfPredicts')->insert([
            'id'=> 1,
            'infection_id'=> 1,
            'area_id'=> 4,
            'created_at'=> '2020/06/20 08:00:00.0',
            'update_at'=> '2020/06/21 00:00:00.0'
        ]);

        DB::table('InfPredicts')->insert([
            'id'=> 1,
            'infection_id'=> 1,
            'area_id'=> 1,
            'created_at'=> '2020/06/21 08:00:00.0',
            'update_at'=> '2020/06/21 08:10:00.0'
        ]);

        DB::table('InfPredicts')->insert([
            'id'=> 1,
            'infection_id'=> 1,
            'area_id'=> 22,
            'created_at'=> '2020/06/21 08:00:00.0',
            'update_at'=> '2020/06/21 22:00:00.0'
        ]);

        DB::table('InfPredicts')->insert([
            'id'=> 1,
            'infection_id'=> 1,
            'area_id'=> 16,
            'created_at'=> '2020/06/22 08:00:00.0',
            'update_at'=> '2020/06/22 18:00:00.0'
        ]);
        
        DB::table('InfPredicts')->insert([
            'id'=> 1,
            'infection_id'=> 1,
            'area_id'=> 4,
            'created_at'=> '2020/06/23 08:00:00.0',
            'update_at'=> '2020/06/23 10:00:00.0'
        ]);
    }
}
