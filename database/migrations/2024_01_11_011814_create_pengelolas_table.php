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
        Schema::create('pengelola', function (Blueprint $table) {
            $table->integer('id_pengelola', true);
            $table->integer('id_akun', false)->index('id_akun');
            $table->string('nama', 225)->nullable(true);
            $table->string('email', 60)->nullable(true);
            $table->text('foto_profil')->nullable(true);

            //foreign key dengan table akun 
            
            $table->foreign('id_akun')->on('takun')
                ->references('id_akun')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengelola');
    }
};
