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
        DB::table('InfMeasures')->insert([
            'id' => 1,
            'measure' => '手洗いうがいをしっかりと行う。',
            'created_at' => '2020/06/12'
        ]);

        DB::table('InfMeasures')->insert([
            'id' => 2,
            'measure' => '密集・密接・密室を避ける。',
            'created_at' => '2020/06/12'
        ]);

        DB::table('InfMeasures')->insert([
            'id' => 3,
            'measure' => '具合が悪いときは自宅にいるようにしましょう。',
            'created_at' => '2020/06/21'
        ]);

        DB::table('InfMeasures')->insert([
            'id' => 4,
            'measure' => '人が集まる行楽地に行かない。',
            'created_at' => '2020/06/12'
        ]);

        DB::table('InfMeasures')->insert([
            'id' => 5,
            'measure' => 'マスク着用',
            'created_at' => '2020/06/12'
        ]);
    }
}
