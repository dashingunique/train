<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index()->default('')->comment('批次名称');
            $table->string('lot_sign')->unique()->default('')->comment('批次唯一标识');
            $table->integer('supplier_id')->index()->default(0)->comment('供应商ID');
            $table->integer('brand_id')->index()->default(0)->comment('品牌ID');
            $table->string('model')->default('')->nullable()->comment('型号');
            $table->string('pact_number')->default('')->nullable()->comment('合同编号');
            $table->string('pact_name')->default('')->nullable()->comment('合同名称');
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
        Schema::dropIfExists('lot');
    }
}
