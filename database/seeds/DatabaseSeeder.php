<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(Diseases::class);
        $this->call(Infections::class);
        $this->call(InfMeasures::class);
        $this->call(InfPersons::class);
        $this->call(InfPredicts::class);
        $this->call(JamAreas::class);
        $this->call(JamInfos::class);
        $this->call(JamPredicts::class);
        $this->call(Locations::class);
        $this->call(PopJamRates::class);
        $this->call(Tweets::class);
    }
}
