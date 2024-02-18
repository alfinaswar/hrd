<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKerja extends Model
{
    use HasFactory;
    protected $table = 'jadwal_kerjas'; // Nama tabel yang sesuai dengan model

    protected $fillable = [
        'Tanggal',
        'NamaPerusahaan',
        'AlamatPerusahaan',
        'NamaKaryawan',
        'JumlahRuangan',
        'Keterangan',
        // tambahkan kolom lainnya di sini sesuai kebutuhan
    ];
}
