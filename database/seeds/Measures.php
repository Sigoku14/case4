<?php

use Illuminate\Database\Seeder;

class Measures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //対策
          DB::table('measures')->insert([
              [
                  'id' => 1,
                  'measure' => '手洗いうがいをしましょう。',
                  'created_at' => '2020-07-22 12:00:00'
              ],
              [
                  'id' => 2,
                  'measure' => '咳をする人から距離をとりましょう。',
                  'created_at' => '2020-07-24 10:00:00'
              ],
              [
                  'id' => 3,
                  'measure' => '自分の目、鼻、口に触るはやめましょう。',
                  'created_at' => '2020-07-25 11:00:00'
              ],
          ]);
      }
  }
