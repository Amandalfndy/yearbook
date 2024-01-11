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
        Schema::create('angkets', function (Blueprint $table) {
            $table->integer('id_angket', true);
            $table->integer('id_siswa', false)->index('id_siswa');
            $table->string('nama_angket', 60)->nullable(true);
            $table->text('foto_perkelompok')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angkets');
    }
};
