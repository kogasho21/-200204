<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFashionBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fashion_builders', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('建築者ファッションID');
            $table->bigInteger('builder_id')->comment('建築者ID');
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
        Schema::dropIfExists('fashion_builders');
    }
}
