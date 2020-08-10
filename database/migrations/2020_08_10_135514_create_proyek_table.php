<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('proyek_id');
            $table->string('nama_proyek');
            $table->longText('deskripsi');
            $table->date('tgl_mulai');
            $table->date('tgl_deadline');
            $table->integer('manager_id');
            $table->integer('karwayan_id');
            $table->timestamps();
            $table->foreign('karyawan_id')->references('karyawan_id')->on('karyawan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('manager_id')->references('manager_id')->on('manager')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyek', function($table) {
            $table->dropForeign(['manager_id'],['karyawan_id']);
         });
         Schema::dropIfExists('proyek');
    }
}
