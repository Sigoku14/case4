<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopJamRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pop_jam_rates', function (Blueprint $table) {
            $table->id()->comment("人口集中率ID");
            $table->string('population')->comment("人口");
            $table->integer('area_id')->comment("地域ID");
            $table->string('pop_jam_rate')->comment("人口集中割合");
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pop_jam_rates');
    }
}
