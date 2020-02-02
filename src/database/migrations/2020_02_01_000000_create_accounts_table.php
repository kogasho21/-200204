<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('管理者ID');
            $table->string('user_name')->comment('管理者ユーザ名');
            $table->string('password')->comment('パスワード');
            $table->string('email')->nullable()->comment('メールアドレス');
            $table->string('display_name')->default('管理者')->nullable()->comment('表示名');
            $table->boolean('status')->default(1)->comment('状態');
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
        Schema::dropIfExists('accounts');
    }
}
