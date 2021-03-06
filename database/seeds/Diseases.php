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
            'created_at' => '2020/06/12 10:00:00.0',
            'updated_at' => '2020/06/13 18:00:00.0'
        ]);

        DB::table('Diseases')->insert([
            'id' => 2,
            'overview' => '2～21日（通常は7～10日）の潜伏期を経て、感染の第一期では高熱、頭痛、筋肉痛、咽喉炎、全身の衰弱などが見られる。第二期では、嘔吐、下痢、発疹、多臓器不全が確認される。',
            'disease' => 'エボラ出血熱',
            'created_at' => '2020/06/27 10:20:00.0',
            'updated_at' => '2020/07/1 11:00:00.0'
        ]);

        DB::table('Diseases')->insert([
            'id' => 3,
            'overview' => '咳やのどの痛みなどの呼吸器の症状だけでなく、高熱、全身のだるさ（倦怠感）、食欲不振などの全身症状が強く、しばしば、頭痛や関節痛・筋肉痛など呼吸器以外の症状を伴います。',
            'disease' => 'インフルエンザ',
            'created_at' => '2020/07/1 10:50:00.0',
            'updated_at' => '2020/07/2 18:00:00.0'
        ]);
    }
}
