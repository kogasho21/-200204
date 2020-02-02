<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_builders', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('建築者映画ID');
            $table->bigInteger('builder_id')->comment('建築者ID');
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
        Schema::dropIfExists('movie_builders');
    }
}
