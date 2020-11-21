<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarbonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carbon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lot_id')->index()->default('0')->comment('批次信息');
            $table->string('sign')->unique()->default('')->comment('碳滑板唯一标识');
            $table->float('init_ply')->default('0')->comment('初始厚度');
            $table->float('operating')->default('0')->comment('运行里程');
            $table->tinyInteger('status')->default('0')->comment('使用状态：0待用 1再用 2已用');
            $table->tinyInteger('repeated')->index()->default('0')->comment('是否重复利用：0不重复利用 1重复利用');
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
        Schema::dropIfExists('carbon');
    }
}
