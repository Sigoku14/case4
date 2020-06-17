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
            'area_id'=> 1,
            'created_at'=> 'Wed Jun 10 16:50:47 +0000 2020',
            'update_at'=> 'Fri Jun 12 16:50:47 +0000 2020'
        ]);
    }
}
