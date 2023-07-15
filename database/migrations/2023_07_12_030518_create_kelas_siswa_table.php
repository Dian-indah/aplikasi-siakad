<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_siswa', function (Blueprint $table) {
            $table->id();           
            $table->foreignId('kelasId')->constrained('kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('mapelId')->constrained('mapel')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('guruPengajar')->constrained('guru')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreignId('waliKelas')->constrained('guru')->onDelete('cascade')->onUpdate('cascade');            
            $table->string('jumlahSiswa');
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
        Schema::dropIfExists('kelas_siswa');
    }
}
