<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('利用者音楽ID');
            $table->bigInteger('user_id')->comment('ユーザID');
            $table->bigInteger('music_id')->comment('音楽ID');
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
        Schema::dropIfExists('music_users');
    }
}
