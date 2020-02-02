<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_builders', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('建築者本ID');
            $table->bigInteger('builder_id')->comment('建築者ID');
            $table->bigInteger('book_id')->comment('本ID');
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
        Schema::dropIfExists('book_builders');
    }
}
