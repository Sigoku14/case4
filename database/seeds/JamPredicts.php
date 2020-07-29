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
        DB::table('jam_predicts')->insert([
            [
                'id' => 1,
                'name' => '梅田',
                'latitude' => 35.006662,
                'longitude' => 138.487433,
                'predicts_date' => '2020-07-29 12:00:00',
                'percentage' => '80',
                'created_at' => '2020-07-29 12:00:00'
            ],
            [
                'id' => 2,
                'name' => '難波',
                'latitude' => 34.728368,
                'longitude' => 135.404065,
                'predicts_date' => '2020-07-29 12:00:00',
                'percentage' => '60',
                'created_at' => '2020-07-29 12:00:00'
            ],
            [
                'id' => 3,
                'name' => '大阪駅',
                'latitude' => 34.702485,
                'longitude' => 135.495951,
                'predicts_date' => '2020-07-29 12:00:00',
                'percentage' => '90',
                'created_at' => '2020-07-29 12:00:00'
            ],
            [
                'id' => 4,
                'name' => '北新地',
                'latitude' => 34.698398,
                'longitude' => 135.496276,
                'predicts_date' => '2020-07-29 12:00:00',
                'percentage' => '50',
                'created_at' => '2020-07-29 12:00:00'
            ],
            [
                'id' => 5,
                'name' => 'HAL大阪',
                'latitude' => 34.699875,
                'longitude' => 135.493032,
                'predicts_date' => '2020-07-29 12:00:00',
                'percentage' => '50',
                'created_at' => '2020-07-29 12:00:00'
            ],
            [
                'id' => 6,
                'name' => '梅田駅',
                'latitude' => 35.006662,
                'longitude' => 138.487433,
                'predicts_date' => '2020-07-29 19:00:00',
                'percentage' => '90',
                'created_at' => '2020-07-29 19:00:00'
            ],
            [
                'id' => 7,
                'name' => '難波',
                'latitude' => 34.728368,
                'longitude' => 135.404065,
                'predicts_date' => '2020-07-29 19:00:00',
                'percentage' => '80',
                'created_at' => '2020-07-29 19:00:00'
            ],
            [
                'id' => 8,
                'name' => '大阪駅',
                'latitude' => 34.702485,
                'longitude' => 135.495951,
                'predicts_date' => '2020-07-29 19:00:00',
                'percentage' => '90',
                'created_at' => '2020-07-29 19:00:00'
            ],
            [
                'id' => 9,
                'name' => '北新地',
                'latitude' => 34.698398,
                'longitude' => 135.496276,
                'predicts_date' => '2020-07-29 19:00:00',
                'percentage' => '70',
                'created_at' => '2020-07-29 19:00:00'
            ],
            [
                'id' => 10,
                'name' => 'HAL大阪',
                'latitude' => 34.699875,
                'longitude' => 135.493032,
                'predicts_date' => '2020-07-29 19:00:00',
                'percentage' => '10',
                'created_at' => '2020-07-29 19:00:00'
            ],
            [
                'id' => 11,
                'name' => '梅田',
                'latitude' => 35.006662,
                'longitude' => 138.487433,
                'predicts_date' => '2020-07-29 23:00:00',
                'percentage' => '30',
                'created_at' => '2020-07-29 23:00:00'
            ],
            [
                'id' => 12,
                'name' => '難波',
                'latitude' => 34.728368,
                'longitude' => 135.404065,
                'predicts_date' => '2020-07-29 23:00:00',
                'percentage' => '20',
                'created_at' => '2020-07-29 23:00:00'
            ],
            [
                'id' => 13,
                'name' => '大阪駅',
                'latitude' => 34.702485,
                'longitude' => 135.495951,
                'predicts_date' => '2020-07-29 23:00:00',
                'percentage' => '30',
                'created_at' => '2020-07-29 23:00:00'
            ],
            [
                'id' => 14,
                'name' => '北新地',
                'latitude' => 34.698398,
                'longitude' => 135.496276,
                'predicts_date' => '2020-07-29 23:00:00',
                'percentage' => '60',
                'created_at' => '2020-07-29 23:00:00'
            ],
            [
                'id' => 15,
                'name' => '堂島',
                'latitude' => 34.696269,
                'longitude' => 135.494261,
                'predicts_date' => '2020-07-29 23:00:00',
                'percentage' => '40',
                'created_at' => '2020-07-29 23:00:00'
            ],
            [
                'id' => 16,
                'name' => '梅田駅',
                'latitude' => 35.006662,
                'longitude' => 138.487433,
                'predicts_date' => '2020-07-30 14:00:00',
                'percentage' => '80',
                'created_at' => '2020-07-30 14:00:00'
            ],
            [
                'id' => 17,
                'name' => '難波',
                'latitude' => 34.728368,
                'longitude' => 135.404065,
                'predicts_date' => '2020-07-30 14:00:00',
                'percentage' => '60',
                'created_at' => '2020-07-30 14:00:00'
            ],
            [
                'id' => 18,
                'name' => '大阪駅',
                'latitude' => 34.702485,
                'longitude' => 135.495951,
                'predicts_date' => '2020-07-30 14:00:00',
                'percentage' => '80',
                'created_at' => '2020-07-30 14:00:00'
            ],
            [
                'id' => 19,
                'name' => '北新地',
                'latitude' => 34.698398,
                'longitude' => 135.496276,
                'predicts_date' => '2020-07-30 14:00:00',
                'percentage' => '50',
                'created_at' => '2020-07-30 14:00:00'
            ],
            [
                'id' => 20,
                'name' => 'HAL大阪',
                'latitude' => 34.699875,
                'longitude' => 135.493032,
                'predicts_date' => '2020-07-30 14:00:00',
                'percentage' => '70',
                'created_at' => '2020-07-30 14:00:00'
            ]
        ]);
    }
}
