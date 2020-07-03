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
            // $table->id();
            $table->bigIncrements('id')->comment('ユーザーID');
            $table->string('name')->comment('ユーザーネーム');
            $table->string('email')->comment('Gメールアドレス');
            $table->string('password')->comment('ユーザーパスワード');
            $table->integer('status')->comment('状態')->nullable(); // ->default(0);
            $table->string('remember_token')->nullable();
            $table->timestamps();
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
