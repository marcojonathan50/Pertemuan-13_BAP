<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replacements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_lengkap')->nullable();
            $table->string('mata_kuliah')->nullable();
            $table->string('kelas')->nullable();
            $table->string('prodi')->nullable();
            $table->string('semester')->nullable();
            $table->string('tahun_akademik')->nullable();
            $table->date('tanggal')->nullable();
            $table->dateTime('jadwal_kuliah')->nullable();
            $table->date('tanggal_replacement')->nullable();
            $table->time('jam_replacement')->nullable();
            $table->string('alasan_replacement')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('replacements');
    }
}
