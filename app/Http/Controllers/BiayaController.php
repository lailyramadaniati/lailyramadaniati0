<?php

namespace App\Http\Controllers;

use App\Biaya;
use Illuminate\Http\Request;
use Alert;
use mysqli;

class BiayaController extends Controller
{
    public function index()
    {
        $biaya = Biaya::all(); // select *from namtable;
        return view('biaya.index', compact('biaya'));
    }

    public function create()
    {
        return view('biaya.create');
    }

    public function store(Request $request)
    {
        Biaya::create($request->all());
        return redirect()->route('biaya'); 
    }

    public function edit(Request $request, $id)
    {
        $biaya = Biaya::where('id_biaya', $id)->first();
        return view('biaya.edit', compact('biaya'));
    }

    public function update(Request $request, $id)
    {
        $biaya = Biaya::where('id_biaya', $id)->update([
            'jenis' => $request->jenis,
            'biaya' => $request->biaya
        ]);
        alert('Sukses', 'Edit Data Berhasil', 'Success');
        return redirect()->route('biaya');
    }

    public function destroy(Request $request, $id)
    {
        $biaya = Biaya::where('id_biaya', $id)->delete();
        alert('Sukses', 'Hapus Data Berhasil', 'Success');
        return redirect()->route('biaya');
    }
}