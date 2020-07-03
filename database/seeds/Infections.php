<?php

use Illuminate\Database\Seeder;

class Infections extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //感染症
        DB::table('Infections')->insert([
            'id' => 1,
            'number' => 1,
            'name' => 'COVID-19'
        ]);

        DB::table('Infections')->insert([
            'id' => 2,
            'number' => 2,
            'name' => 'エボラ出血熱'
        ]);

        DB::table('Infections')->insert([
            'id' => 3,
            'number' => 3,
            'name' => 'インフルエンザ'
        ]);
    }
}
