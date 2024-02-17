<?php

namespace App\Http\Controllers;

use App\Models\LembarKerja;
use App\Http\Requests\StoreLembarKerjaRequest;
use App\Http\Requests\UpdateLembarKerjaRequest;

class LembarKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lembar-kerja.index');
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
    public function store(StoreLembarKerjaRequest $request)
    {
        //
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
    public function edit(LembarKerja $lembarKerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLembarKerjaRequest $request, LembarKerja $lembarKerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LembarKerja $lembarKerja)
    {
        //
    }
}
