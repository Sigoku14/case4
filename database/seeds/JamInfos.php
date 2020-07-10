<?php

use Illuminate\Database\Seeder;

class JamInfos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //混雑情報
        DB::table('JamInfos')->insert([
            'id'=> 1,
            'popjam_id'=> 1,
            'aread'=> 1,
            'created_at'=> 'Wed Jun 10 16:50:47 +0000 2020',
            'update_at'=> 'Fri Jun 12 16:50:47 +0000 2020',
        ]);
    }
}
