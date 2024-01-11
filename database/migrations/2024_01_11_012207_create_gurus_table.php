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
        Schema::create('guru', function (Blueprint $table) {
            $table->integer('id_guru', true);
            $table->integer('id_akun', false)->index('id_akun');
            $table->integer('id_sekolah', false)->index('id_sekolah');
            $table->string('nama_guru', 60)->nullable(true);
            $table->string('jabatan', 225)->nullable(true);
            $table->text('foto_perguru')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
