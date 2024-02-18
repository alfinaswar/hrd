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
        Schema::create('catatan_kerjas', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_mitra');
            $table->string('nama_karyawan');
            $table->integer('jumlah_ruangan');
            $table->string('peralatan')->nullable();
            $table->string('bahan')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_kerjas');
    }
};
