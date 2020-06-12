<?php

use Illuminate\Database\Seeder;

class Diseases extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //感染症
        DB::table('Diseases')->insert([
            'id' => 1,
            'overview' => '新型コロナウイルスに感染しても、多くの場合は症状が出ないようです。症状が出る場合も大半の人では咳や発熱などの軽症で終わります。そのため、多くの人は新型コロナウイルスに感染しても気づきません。そのため、感染が急速に広がる恐れがあります。',
            'disease' => 'COVID-19',
            'created_at' => '2020/06/12',
            'updated_at' => '2020/06/13'
        ]);
    }
}
