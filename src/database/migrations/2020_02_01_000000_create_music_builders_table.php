<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_builders', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('建築者音楽ID');
            $table->bigInteger('builder_id')->comment('建築者ID');
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
        Schema::dropIfExists('music_builders');
    }
}
