<?php

use Illuminate\Database\Seeder;

class JamAreas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //密集状況
        DB::table('jam_areas')->insert([
            'id'=> 1,
            'latitude' => -122.41942,
            'longitude' => 37.77493,
            'created_at'=> 'Fri Jun 12 16:50:47 +0000 2020'
        ]);
    }
}
