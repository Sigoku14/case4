<?php

use Illuminate\Database\Seeder;

class Notifications extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //通知
        DB::table('notifications')->insert([
            [
                'id' => 1,
                'area' => '大阪府大阪市北区梅田3丁目3-1',
                'created_at' => '2020-07-22 12:00:00'
            ],
            [
                'id' => 2,
                'area' => '大阪府大阪市北区大淀中1丁目10-3',
                'created_at' => '2020-07-24 10:00:00'
            ],
            [
                'id' => 3,
                'area' => '大阪府大阪市天王寺区悲田院町10-45',
                'created_at' => '2020-07-25 11:00:00'
            ],
            [
                'id' => 4,
                'area' => '大阪府大阪市此花区桜島2丁目1−33',
                'created_at' => '2020-07-27 06:00:00'
            ],
        ]);
    }
}
