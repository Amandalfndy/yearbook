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
        Schema::create('petinggi', function (Blueprint $table) {
            $table->integer('id_petinggi', true);
            $table->integer('id_sekolah', false)->index('id_sekolah');
            $table->integer('id_sambutan', false)->index('id_sambutan');
            $table->string('nama_petinggi', 60)->nullable(true);
            $table->string('jabatan', 225)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petinggis');
    }
};
