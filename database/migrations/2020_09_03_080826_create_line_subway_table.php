<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineSubwayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_subway', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('line_id')->index()->default('0')->comment('线别ID');
            $table->integer('subway_id')->index()->default('0')->comment('列车ID');
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
        Schema::dropIfExists('line_subway');
    }
}
