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
            $table->string('username')->unique();
            $table->string('email');
            $table->string('nisn')->unique();      
            $table->string('jenkel');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('nik')->unique();
            $table->string('noKk');
            $table->string('noHp');
            $table->string('agama');
            $table->string('alamat');
            $table->string('jenisTinggal');
            $table->string('transportasi');            
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
            $table->string('sekolahAsal');
            $table->string('anak');
            $table->string('jmlSaudara');            
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
