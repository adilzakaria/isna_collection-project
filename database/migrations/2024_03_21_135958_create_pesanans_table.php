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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->foreign('nama')->references('nama')->on('users');
            $table->string('hp')->foreign('hp')->references('hp')->on('users');
            $table->string('email')->foreign('email')->references('email')->on('users');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->text('alamat');
            $table->string('kode');
            $table->string('ukuran');
            $table->string('jenis');
            $table->string('gambar');
            $table->text('tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};