<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->default('')->comment('用户名称');
            $table->string('password')->index()->default('')->comment('用户密码');
            $table->string('name')->index()->default('')->comment('用户昵称');
            $table->string('number')->unique()->default('')->comment('工号');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('remember_token')->default('')->comment('token信息');
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
        Schema::dropIfExists('employee');
    }
}
