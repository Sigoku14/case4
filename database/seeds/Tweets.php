<?php

use Illuminate\Database\Seeder;

class Tweets extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ツイート
        DB::table('Tweets')->insert([
            'id' => 1050118621198921700,
            'text' => 'COVID-19',
            'location' => '-122.41942,37.77493',
            'tweeted_at' => 'Fri Jun 12 16:50:47 +0000 2020'
        ]);
    }
}
