<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('利用者映画ID');
            $table->bigInteger('user_id')->comment('ユーザID');
            $table->bigInteger('movie_id')->comment('映画ID');
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
        Schema::dropIfExists('movie_users');
    }
}
