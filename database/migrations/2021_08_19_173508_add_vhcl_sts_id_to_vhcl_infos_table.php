<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVhclStsIdToVhclInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vhcl_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('vhcl_sts_id');

            $table->foreign('vhcl_sts_id')->references('id')->on('vhcl_sts_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vhcl_info', function (Blueprint $table) {
            $table->dropConstrainedForeignId('vhcl_sts_id');
            $table->dropColumn('vhcl_sts_id');
        });
    }
}
