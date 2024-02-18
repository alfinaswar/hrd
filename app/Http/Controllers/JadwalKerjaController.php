<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKerja;
use App\Http\Requests\StoreJadwalKerjaRequest;
use App\Http\Requests\UpdateJadwalKerjaRequest;

class JadwalKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data2 = JadwalKerja::orderBy('id', 'desc')->get();
        return view('jadwal.index', compact('data2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JadwalKerja::create($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $jadwal = JadwalKerja::find($id);
        $data2 = JadwalKerja::orderBy('id', 'desc')->get();
        return view('jadwal.edit', compact('jadwal', 'data2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request,$id)
    {
        $jadwal = JadwalKerja::findOrFail($id);
        $jadwal->update($request->all());

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('jadwal.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request,$id)
    {
        $jadwal = JadwalKerja::findOrFail($id);
        $jadwal->delete($id);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('jadwal.index')->with('success', 'Data berhasil diperbarui.');
    }
}
