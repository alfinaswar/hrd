<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanKerja;

class CatatanKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data2 = CatatanKerja::orderBy('id', 'desc')->get();
        return view('catatan.index', compact('data2'));
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
        CatatanKerja::create($request->all());
        return redirect()->route('catatan.index')->with('success', 'Data berhasil disimpan.');
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
    public function edit(Request $request, $id)
    {
        $catatan = CatatanKerja::find($id);
        $data2 = CatatanKerja::orderBy('id', 'desc')->get();
        return view('catatan.edit', compact('catatan', 'data2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, $id)
    {
        $catatan = CatatanKerja::findOrFail($id);
        $catatan->update($request->all());

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('catatan.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request, $id)
    {
        $catatan = CatatanKerja::findOrFail($id);
        $catatan->delete($id);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('catatan.index')->with('success', 'Data berhasil diperbarui.');
    }
}
