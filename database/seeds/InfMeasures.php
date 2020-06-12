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
            'measure' => 'マスクをつけて手洗いうがいをしっかりと行う。',
            'created_at' => '2020/06/12'
        ]);
    }
}
