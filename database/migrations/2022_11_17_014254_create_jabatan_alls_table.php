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
        Schema::create('jabatan_alls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('nama_jabatan');
            $table->foreignId('id_jenjang');
            $table->foreignId('id_pendidikan');
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
        Schema::dropIfExists('jabatan_alls');
    }
};