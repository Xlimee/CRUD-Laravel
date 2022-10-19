<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;
use DB;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = DB::table('tbl_jenis')->get();
        return view('jenis.index',compact(['jenis']));
    }

    public function create()
    {
        return view('jenis.create');
    }

    public function store(Request $request)
    {
         $store = Jenis::create([
            
            'jenis_nama' => $request->jenis_nama,
            'jenis_status' => $request->jenis_status,
        ]);
        
        echo $store->id_jenis;
        return redirect('/jenis');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.edit',compact(['jenis']));
    }
  
    public function update($id, Request $request)
    {
        $jenis = Jenis::find($id);
        $jenis->update($request->except(['_token','submit']));
        return redirect('/jenis');
    }

    public function destroy($id)
    {
        $destroy = Jenis::find($id);
        $destroy->delete();
        return redirect('/jenis');
    }

}
