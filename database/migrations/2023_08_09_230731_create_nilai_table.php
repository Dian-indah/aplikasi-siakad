<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswaKelasId')->constrained('siswa_kelas')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreignId('kelasMapelId')->constrained('kelas_mapel')->onDelete('cascade')->onUpdate('cascade');            
            $table->string('nts');
            $table->string('nas');
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
        Schema::dropIfExists('nilai');
    }
}
