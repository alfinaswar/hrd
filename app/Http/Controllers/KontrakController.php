<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontrak;

class KontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data2 = kontrak::orderBy('id', 'desc')->get();
        return view('kontrak.index', compact('data2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Kontrak::orderBy('id', 'desc')->get();
        dd($data);
        return view('kontrak.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Kontrak::create($request->all());

        return redirect()->back()->with('success', 'Data Kontrak berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(LembarKerja $lembarKerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $kontrak = kontrak::find($id);
        $data2 = kontrak::orderBy('id', 'desc')->get();
        return view('kontrak.edit', compact('kontrak','data2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $kontrak = kontrak::findOrFail($id);
        $kontrak->update($request->all());

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('kontrak.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        $kontrak = kontrak::findOrFail($id);
        $kontrak->delete($id);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('kontrak.index')->with('success', 'Data berhasil diperbarui.');
    }
}
