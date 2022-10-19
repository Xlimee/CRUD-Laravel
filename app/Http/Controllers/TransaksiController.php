<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use DB;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = DB::table('tbl_transaksi')->get();
        return view('transaksi.index',compact(['transaksi']));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $store = Transaksi::create([
            
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->transaksi_nonota,
            'transaksi_status' => $request->transaksi_status,
        ]);

        echo $store->id_transaksi;
        return redirect('/transaksi');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',compact(['transaksi']));
    }
  
    public function update($id, Request $request)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->except(['_token','submit']));
        return redirect('/transaksi');
    }

    public function destroy($id)
    {
        $destroy = Transaksi::find($id);
        $destroy->delete();
        return redirect('/transaksi');
    }

}
