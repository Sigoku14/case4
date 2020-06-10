<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ユーザーID');
            $table->string('name')->comment('ユーザー任意の名前');
            $table->string('mail')->comment('ユーザーのメールアドレス');
            $table->string('password')->comment('ユーザーのパスワード（hash化）');
            $table->dateTime('created_at');
            $table->datetime('updated_at');
            $table->integer('status')->comment('0=退会、1=正常');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
