<?php

namespace App\Http\Controllers;

use App\Models\karepmuwes;
use Illuminate\Http\Request;

class karepmu1 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('karepmuwes', [
            'tampilcoy' => karepmuwes::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $tampilkarep = new karepmuwes();
        // dd($tampilkarep);
        //kiri dari db kanan dari form
        $tampilkarep->nim = $request->nim;
        $tampilkarep->nama = $request->nama;
        $tampilkarep->jurusan = $request->jurusan;
        $tampilkarep->prodi = $request->prodi;

        $tampilkarep->save();

        return view('karepmuwes', [
            'tampilcoy' => karepmuwes::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = karepmuwes::find($id);
        return view('karepmuwesedit', [
            'editcoy' => $edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updatekarep = karepmuwes::find($id);
        //kiri dari db kanan dari form
        $updatekarep->nim = $request->nim;
        $updatekarep->nama = $request->nama;
        $updatekarep->jurusan = $request->jurusan;
        $updatekarep->prodi = $request->prodi;

        $updatekarep->save();

        return redirect()->route('hal_utama');
        // return view('karepmuwes', [
        //     'tampilcoy' => karepmuwes::all()
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroys = karepmuwes::find($id);
        $destroys->delete();
        return redirect()->route('hal_utama');

        // return view('karepmuwes', [
        //     'tampilcoy' => karepmuwes::all()
        // ]);
    }
}
