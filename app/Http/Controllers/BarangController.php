<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }
 
    public function create()
    {
        return view('barang.form');
    }
 
    public function store(Request $request)
    {
        $barang = new Barang;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->updated_at = now();
        $barang->created_at = now();
        $barang->save();

 
        return redirect()->route('barang.index');
    }
 
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }
 
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.form', compact('barang'));
    }
 
    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();
 
        return redirect()->route('barang.index');
    }
 
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
 
        return redirect()->route('barang.index');
    }
}