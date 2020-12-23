<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertLoadingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loading', function (Blueprint $table) {
            $table->tinyInteger('state')->index()->default(0)->comment('装车状态：0装车中 1已下车');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loading', function (Blueprint $table) {
            $table->dropColumn('state');
        });
    }
}
