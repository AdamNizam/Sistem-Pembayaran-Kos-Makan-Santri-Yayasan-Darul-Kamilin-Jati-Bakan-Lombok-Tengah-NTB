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
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gambar')->nullable();
            $table->string('tempat_tgl');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('tingkat_pendidikan');
            $table->unsignedBigInteger('wali_santri_id');
            $table->timestamps();

            $table->foreign('wali_santri_id')->references('id')->on('wali_santris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
