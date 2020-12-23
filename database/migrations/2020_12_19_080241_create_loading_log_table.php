<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoadingLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loading_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loading_id')->index()->default('0')->comment('装车记录ID');
            $table->tinyInteger('role')->index()->default('0')->comment('角色：1管理员 2员工');
            $table->integer('operator_id')->index()->default('0')->comment('操作员ID：对应管理员ID 员工ID');
            $table->string('desc')->nullable()->comment('操作描述');
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
        Schema::dropIfExists('loading_log');
    }
}
