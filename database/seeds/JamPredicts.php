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
        DB::table('JamPredicts')->insert([
            'id'=>1,
            'pop_jam_id'=> 1,
            'areaa_id'=> 1,
            'predicts_date'=> 'Fri Jun 19 16:50:47 +0000 2020',
            'created_at' => 'Wed Jun 10 16:50:47 +0000 2020',
            'updated_at'=> 'Fri Jun 12 16:50:47 +0000 2020'
        ]);
    }
}
