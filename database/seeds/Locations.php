<?php

use Illuminate\Database\Seeder;

class Locations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //場所
        DB::table('locations')->insert([
            'id' => 1,
            'user_id' => 1,
            'latitude' => -122.41942,
            'longitude' => 37.77493
        ]);
    }
}
