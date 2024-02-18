<?php

namespace App\Http\Controllers;
use App\Models\CatatanKerja;
use App\Models\JadwalKerja;
use App\Models\kontrak;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function catatan()
    {
        $data2 = CatatanKerja::get();
        $pdf = PDF::loadView('laporan/catatan', compact('data2'));
        $pdfmya = $pdf->stream('Dokumen.pdf');
        return $pdf->stream('Dokumen.pdf');
    }
    public function jadwal()
    {
        $data2 = JadwalKerja::get();
        $pdf = PDF::loadView('laporan/jadwal', compact('data2'));
        $pdfmya = $pdf->stream('Dokumen.pdf');
        return $pdf->stream('Dokumen.pdf');
    }
    public function kontrak()
    {
        $data2 = kontrak::get();
        $pdf = PDF::loadView('laporan/kontrak', compact('data2'));
        $pdfmya = $pdf->stream('Dokumen.pdf');
        return $pdf->stream('Dokumen.pdf');
    }

}
