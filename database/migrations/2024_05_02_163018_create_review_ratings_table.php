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
        Schema::create('review_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('email')->foreign('email')->references('email')->on('users');
            $table->string('kode')->foreign('kode')->references('kode')->on('pesanans');
            $table->string('nama')->foreign('nama')->references('nama')->on('users');
            $table->string('jenis')->foreign('jenis')->references('jenis')->on('pesanans');
            $table->longText('rating');
            $table->integer('review')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_ratings');
    }
};
