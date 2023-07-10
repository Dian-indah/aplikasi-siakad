<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('nisn');
            $table->string('nipd');
            $table->string('jenkel');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('nik');
            $table->string('noKk');
            $table->string('noHp');
            $table->string('agama');
            $table->string('alamat');
            $table->string('jenisTinggal');
            $table->string('trasportasi');
            $table->string('skhun');
            $table->string('penerimaKpps');
            $table->string('noKpps');
            $table->string('namaAyah');
            $table->date('tanggalLahirAyah');
            $table->string('pendidikanAyah');
            $table->string('pekerjaanAyah');
            $table->string('penghasilanAyah');
            $table->string('nikAyah');
            $table->string('namaIbu');
            $table->date('tanggalLahirIbu');
            $table->string('pendidikanIbu');
            $table->string('pekerjaanIbu');
            $table->string('penghasilanIbu');
            $table->string('nikIbu');
            $table->string('namaWali');
            $table->date('tanggalLahirWali');
            $table->string('pendidikanWali');
            $table->string('pekerjaanWali');
            $table->string('penghasilanWali');
            $table->string('nikWali');
            $table->string('noUn');
            $table->string('noSeriIjazah');
            $table->string('penerimaKip');
            $table->string('noKip');
            $table->string('namaKip');
            $table->string('noReqAkta');
            $table->string('bank');
            $table->string('noRekening');
            $table->string('namaRekening');
            $table->string('layakPip');
            $table->string('alasanPip');
            $table->string('kebutuhanKhusus');
            $table->string('sekolahAsal');
            $table->string('anak');
            $table->string('jmlSaudara');
            $table->string('bb');
            $table->string('tb');
            $table->string('jarakSekolah');   
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('siswa');
    }
}
