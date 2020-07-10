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
        DB::table('inf_persons')->insert([
            [
                'id'=> 1,
                'route_taken'=> 1,
                'user_id'=> 1,
                'inf_area'=> 1,
                'created_at'=> '2020/06/16'
            ],[
                'id'=> 2,
                'route_taken'=> 2,
                'user_id'=> 3,
                'inf_area'=> 4,
                'created_at'=> '2020/06/16'
            ],[
                'id'=> 3,
                'route_taken'=> 2,
                'user_id'=> 3,
                'inf_area'=> 1,
                'created_at'=> '2020/06/16'
            ],[
                'id'=> 4,
                'route_taken'=> 5,
                'user_id'=> 2,
                'inf_area'=> 4,
                'created_at'=> '2020/06/16'
            ],[
                'id'=> 5,
                'route_taken'=> 8,
                'user_id'=> 5,
                'inf_area'=> 16,
                'created_at'=> '2020/06/16'
            ],[
                'id'=> 6,
                'route_taken'=> 1,
                'user_id'=> 9,
                'inf_area'=> 1,
                'created_at'=> '2020/06/16'
            ],[
                'id'=> 7,
                'route_taken'=> 4,
                'user_id'=> 7,
                'inf_area'=> 22,
                'created_at'=> '2020/06/16'
            ]
        ]);
    }
}
