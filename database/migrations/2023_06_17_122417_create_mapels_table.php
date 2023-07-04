<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel', function (Blueprint $table) {
            $table->id();
            $table->string('kodeMapel');
            $table->string('namaMapel');      
            $table->string('statusKurikulum');
            $table->string('kompetensiKeahlian');
            $table->string('namaPtk');
            $table->foreignId('tingkatKelasId')->constrained('tingkatKelas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('kurikulumId')->constrained('kurikulum')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mapels');
    }
}
