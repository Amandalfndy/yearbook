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
        Schema::create('siswas', function (Blueprint $table) {
            $table->integer('id_siswa', true);
            $table->integer('id_akun', false)->index('id_akun');
            $table->integer('id_kelas', false)->index('id_kelas');
            $table->string('nama_siswa', 60)->nullable(true);
            $table->string('sosmed', 60)->nullable(true);
            $table->text('foto_persiswa')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
