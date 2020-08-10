<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->bigIncrements('manager_id');
            $table->integer('karyawan_id');
            $table->foreign('karyawan_id')->references('karyawan_id')->on('manager');
            //$table->foreign('karyawan_id')->references('karyawan_id')->on('manager')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('karyawan', function($table) {
            $table->dropForeign('karyawan_id');
         });
      
        Schema::dropIfExists('manager');
    }
}
