<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('password');
            $table->string('nohp');
            $table->string('referensi_kerja');
            $table->string('ktp');
            $table->string('npwp');
            $table->string('pasphoto');
            $table->string('nama_jabatan');
            $table->string('nama_jenjang');
            $table->string('nama_pendidikan');
            $table->string('pengalaman');
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
        Schema::dropIfExists('sertifikasis');
    }
};