<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->default('')->comment('供应商名称');
            $table->string('tel')->index()->nullable()->comment('联系电话');
            $table->string('email')->unique()->default('')->comment('邮箱地址');
            $table->integer('province_id')->index()->default('0')->comment('省份ID');
            $table->integer('city_id')->index()->default('0')->comment('城市ID');
            $table->integer('district_id')->index()->default('0')->comment('地区ID');
            $table->string('address')->default('')->comment('详细地址');
            $table->string('coordinate')->nullable()->comment('地区坐标');
            $table->string('remark')->nullable()->comment('备注信息');
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
        Schema::dropIfExists('supplier');
    }
}
