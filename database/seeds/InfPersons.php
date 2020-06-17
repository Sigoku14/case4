<?php

use Illuminate\Database\Seeder;

class InfPersons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //感染者
        DB::table('InfPersons')->insert([
            'id'=> 1,
            'route_taken'=> 1,
            'user_id'=> 1,
            'inf_area'=> 1,
            'created_at'=> 'Fri Jun 12 16:50:47 +0000 2020'
        ]);
    }
}
