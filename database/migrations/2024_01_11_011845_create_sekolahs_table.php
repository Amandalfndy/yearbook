<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sekolah', function (Blueprint $table) {
            $table->integer('id_sekolah', true);
            $table->integer('id_pengelola', false)->index('id_pengelola');
            $table->integer('id_petinggi', false)->index('id_petinggi');
            $table->string('nama_sekolah', 60)->nullable(true);
            $table->string('visi_misi', 60)->nullable(true);
            $table->string('angkatan', 60)->nullable(true);
            $table->text('foto_semua_guru')->nullable(true);
            $table->string('alamat', 60)->nullable(true);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
