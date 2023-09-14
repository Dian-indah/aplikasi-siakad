<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepsekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepsek', function (Blueprint $table) {
            $table->id();         
            $table->string('username')->unique();
            $table->string('nama');
            $table->string('password');
            $table->string('nik')->unique();
            $table->string('noKk')->nullable();
            $table->string('nuptk')->unique();
            $table->string('jenkel')->nullable();
            $table->string('tempatLahir')->nullable();
            $table->date('tanggalLahir')->nullable();     
            $table->string('notelp')->nullable();
            $table->string('email')->unique();            
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kewarganegaraan')->nullable();            
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
        Schema::dropIfExists('kepsek');
    }
}
