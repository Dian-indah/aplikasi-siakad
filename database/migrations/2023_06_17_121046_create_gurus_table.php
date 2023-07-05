<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();         
            $table->string('username');
            $table->string('password');
            $table->string('nik');
            $table->string('noKk');
            $table->string('nuptk');
            $table->string('jenkel');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('nip');
            $table->string('notelp');
            $table->email('email')->unique();
            $table->string('statusKepegawaian');
            $table->string('skPengangkatan');
            $table->string('tmpPengangkatan');
            $table->string('lembagaPengangkatan');
            $table->string('sumberGaji');
            $table->string('jenisPtk');
            $table->string('npwp');
            $table->string('namaNpwp');
            $table->string('agama');
            $table->string('alamat');
            $table->string('kewarganegaraan');
            $table->string('ibuKandung');
            $table->string('statusPerkawinan');
            $table->string('namaPasangan');
            $table->string('nipPasangan');
            $table->string('pekerjaanPasangan');
            $table->string('lisensiKepsek');
            $table->string('diklatKepegawaian');
            $table->string('keahlianBraile');
            $table->string('keahlianBahasaIsyarat');
            $table->string('bank');
            $table->string('norek');
            $table->string('namaRek');
            $table->timestamp('email_verified_at')->nullable();   
            $table->rememberToken();
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
        Schema::dropIfExists('gurus');
    }
}
