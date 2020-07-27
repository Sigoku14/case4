<?php

use Illuminate\Database\Seeder;

class AlartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alarts')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => '高感染リスク区画に入りました。',
                'text' => '手洗いうがいを忘れず',
            ],
        ]);
    }
}
