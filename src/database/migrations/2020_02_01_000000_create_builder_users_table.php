<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuilderUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builder_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('お気に入り建築者ID');
            $table->bigInteger('builder_id')->comment('建築者ID');
            $table->bigInteger('user_id')->comment('ユーザID');
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
        Schema::dropIfExists('builder_users');
    }
}
