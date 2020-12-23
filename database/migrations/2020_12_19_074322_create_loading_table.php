<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoadingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loading', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carbon_id')->index()->default('0')->comment('装车碳滑板ID');
            $table->double('init_ply')->default('0')->comment('初始厚度');
            $table->double('loading')->default('0')->comment('装车公里数');
            $table->integer('subway_id')->index()->default('0')->comment('列车ID');
            $table->string('position_id')->index()->default('0')->comment('安装弓位');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loading');
    }
}
