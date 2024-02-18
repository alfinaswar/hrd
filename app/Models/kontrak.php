<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontrak extends Model
{
    use HasFactory;
    protected $table = 'kontrak'; // Jika nama tabel tidak sesuai dengan konvensi Laravel, tentukan di sini

    protected $fillable = [
        'Tanggal',
        'NamaPerusahaan',
        'AlamatPerusahaan',
        'Npwp',
        'NamaDirut',
        'MasaKontrak',
        'JumlahKaryawan',
    ];
}
