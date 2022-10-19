<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use DB;

class BarangController extends Controller
{
    public function index()
    {
        $barang = DB::table('tbl_barang')->get();
        return view('barang.index',compact(['barang']));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $store = Barang::create([
           
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'id_jenis' => $request->id_jenis,
            'id_supplier' => $request->id_supplier,
            'harga_jual' => $request->harga_jual,
            'barang_status' => $request->barang_status,
        ]);

        echo $store->id_barang;
        return redirect('/barang');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit',compact(['barang']));
    }
  
    public function update($id, Request $request)
    {
        $barang = Barang::find($id);
        $barang->update($request->except(['_token','submit']));
        return redirect('/barang');
    }

    public function destroy($id)
    {
        $destroy = Barang::find($id);
        $destroy->delete();
        return redirect('/barang');
    }

}
