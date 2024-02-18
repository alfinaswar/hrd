<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanKerja extends Model
{
    use HasFactory;
    protected $table = 'catatan_kerjas';

    protected $fillable = [
        'tanggal',
        'nama_mitra',
        'nama_karyawan',
        'jumlah_ruangan',
        'peralatan',
        'bahan',
        'keterangan',
    ];
}
