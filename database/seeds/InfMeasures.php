<?php

use Illuminate\Database\Seeder;

class InfMeasures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inf_measures')->insert([
            [
                'id' => 1,
                'infection_id'=> 1,
                'measure' => '手洗いうがいをしっかりと行う。',
                'created_at' => '2020/06/12'
            ],[
                'id' => 2,
                'infection_id'=> 1,
                'measure' => '密集・密接・密室を避ける。',
                'created_at' => '2020/06/12'
            ],[
                'id' => 3,
                'infection_id'=> 1,
                'measure' => '具合が悪いときは自宅にいるようにしましょう。',
                'created_at' => '2020/06/21'
            ],[
                'id' => 4,
                'infection_id'=> 1,
                'measure' => '人が集まる行楽地に行かない。',
                'created_at' => '2020/06/12'
            ],[
                'id' => 5,
                'infection_id'=> 1,
                'measure' => 'マスク着用',
                'created_at' => '2020/06/12'
            ]
        ]);
    }
}
