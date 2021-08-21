<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVhclTypeIdToVhclInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vhcl_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('vhcl_type_id');

            $table->foreign('vhcl_type_id')->references('id')->on('vhcl_type_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vhcl_infos', function (Blueprint $table) {
            $table->dropConstrainedForeignId('vhcl_type_id');
            $table->dropColumn('vhcl_type_id');
        });
    }
}
