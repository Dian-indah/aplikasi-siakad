<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswaId')->constrained('siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('kelasSiswaId')->constrained('kelas_siswa')->onDelete('cascade')->onUpdate('cascade');        
            $table->string('nts');
            $table->string('nas');     
            $table->string('kehadiran');     
            $table->string('tglKehadiran');     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_kelas');
    }
}
