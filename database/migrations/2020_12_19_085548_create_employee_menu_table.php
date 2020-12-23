<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->index()->default('0')->comment('上级菜单');
            $table->smallInteger('order')->index()->default('0')->comment('排序');
            $table->string('title')->index()->default('')->comment('菜单名称');
            $table->string('icon')->nullable()->comment('图标');
            $table->string('uri')->nullable()->comment('连接地址');
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
        Schema::dropIfExists('employee_menu');
    }
}
