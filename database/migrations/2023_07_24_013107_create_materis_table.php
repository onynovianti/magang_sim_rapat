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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_materi');
            $table->string('deskripsi_materi');
            $table->string('file_materi');
            $table->timestamps();

            # Relasi
            $table->unsignedBigInteger('rapat_id');
            $table->foreign('rapat_id')->references('id')->on('rapats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
