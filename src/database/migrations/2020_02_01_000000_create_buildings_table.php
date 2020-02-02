<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('建物ID');
            $table->bigInteger('builder_id')->comment('建築者ID');
            $table->string('name')->comment('建物名');
            $table->text('comment')->comment('コメント');
            $table->string('image')->nullable()->comment('画像パス');
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
        Schema::dropIfExists('buildings');
    }
}
