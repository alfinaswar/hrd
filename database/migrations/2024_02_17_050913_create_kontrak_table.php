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
        Schema::create('kontrak', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal')->nullable();
            $table->string('NamaPerusahaan')->nullable();
            $table->string('AlamatPerusahaan')->nullable();
            $table->string('Npwp')->nullable();
            $table->string('NamaDirut')->nullable();
            $table->string('MasaKontrak')->nullable();
            $table->string('JumlahKaryawan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontrak');
    }
};
