<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_tags', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('建物情報タグID');
            $table->bigInteger('building_id')->comment('建物ID');
            $table->bigInteger('tag_id')->comment('タグID');
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
        Schema::dropIfExists('building_tags');
    }
}
