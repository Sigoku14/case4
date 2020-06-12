<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamPredictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_predicts', function (Blueprint $table) {
            $table->id()->comment('混雑予想ID');
            $table->string('popjam_id')->comment('');
            $table->string('area_id')->comment('地域ID');
            $table->stirng('predicts_date')->comment('予想日(テキスト)');
            $table->stirng('created_at');
            $table->stirng('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jam_predicts');
    }
}
