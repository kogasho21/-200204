<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('利用者居住地ID');
            $table->bigInteger('user_id')->comment('ユーザID');
            $table->bigInteger('area_id')->comment('エリアID');
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
        Schema::dropIfExists('area_users');
    }
}
