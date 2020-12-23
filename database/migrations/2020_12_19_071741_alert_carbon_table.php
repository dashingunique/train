<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertCarbonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carbon', function (Blueprint $table) {
            $table->float('loading')->default(0)->comment('装载里程');
            $table->float('used_ply')->default(0)->comment('磨耗厚度');
            $table->float('unload')->default(0)->comment('下车里程');
            $table->float('residue_ply')->default(0)->comment('剩余厚度');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carbon', function (Blueprint $table) {
            $table->dropColumn('loading');
            $table->dropColumn('used_ply');
            $table->dropColumn('unload');
            $table->dropColumn('residue_ply');
        });
    }
}
