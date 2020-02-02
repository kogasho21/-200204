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
            $table->bigIncrements('id')->comment('ユーザ管理用ID');
            $table->string('name')->comment('名前');
            $table->tinyInteger('sex')->comment('性別');
            $table->date('birth_dt')->comment('誕生日');
            $table->string('occupation')->nullable()->comment('職業');
            $table->text('comment')->nullable()->comment('自己紹介');
            $table->string('user_name')->comment('ユーザ名');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->boolean('status')->default(1)->comment('状態');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
