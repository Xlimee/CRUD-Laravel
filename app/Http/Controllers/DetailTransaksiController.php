<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_detail;
use DB;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        $detail = DB::table('tbl_transaksi_detail')->get();
        return view('detail.index',compact(['detail']));
    }

    public function create()
    {
        return view('detail.create');
    }

    public function store(Request $request)
    {
         $store = Transaksi_detail::create([
           
            'id_transaksi' => $request->id_transaksi,
            'id_barang' => $request->id_barang,
            'transaksi_jenis' => $request->transaksi_jenis,
            'transaksi_harga' => $request->transaksi_harga,
            'transaksi_jumlah' => $request->transaksi_jumlah,
            'transaksi_detail_status' => $request->transaksi_detail_status,
        ]);

        echo $store->id_transaksi_detail;
        return redirect('/detail');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $detail = Transaksi_detail::find($id);
        return view('detail.edit',compact(['detail']));
    }
  
    public function update($id, Request $request)
    {
        $detail = Transaksi_detail::find($id);
        $detail->update($request->except(['_token','submit']));
        return redirect('/detail');
    }

    public function destroy($id)
    {
        $destroy = Transaksi_detail::find($id);
        $destroy->delete();
        return redirect('/detail');
    }

}
