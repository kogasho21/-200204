<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFashionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fashion_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('利用者ファッションID');
            $table->bigInteger('user_id')->comment('ユーザID');
            $table->bigInteger('fashion_id')->comment('ファッションID');
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
        Schema::dropIfExists('fashion_users');
    }
}
