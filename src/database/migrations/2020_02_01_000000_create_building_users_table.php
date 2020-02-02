<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('お気に入り建物ID');
            $table->bigInteger('building_id')->comment('建物ID');
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
        Schema::dropIfExists('building_users');
    }
}
