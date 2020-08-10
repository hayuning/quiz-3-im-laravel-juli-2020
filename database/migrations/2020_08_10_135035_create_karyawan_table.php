<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karwayan', function (Blueprint $table) {
            $table->bigIncrements('karwayan_id');
            $table->string('nama', 120);
            $table->string('jabatan');
            $table->integer('manager_id');
            $table->foreign('manager_id')->references('manager_id')->on('manager');
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
            $table->dropForeign('manager_id');
         });
      
        Schema::dropIfExists('karyawan');
    }
}
