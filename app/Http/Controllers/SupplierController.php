<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use DB;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = DB::table('tbl_supplier')->get();
        return view('supplier.index',compact(['supplier']));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
         $store = Supplier::create([
            
            'supplier_nama' => $request->supplier_nama,
            'supplier_alamat' => $request->supplier_alamat,
            'supplier_phone' => $request->supplier_phone,
            'supplier_status' => $request->supplier_status,
        ]);

        echo $store->id_supplier;
        return redirect('/supplier');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit',compact(['supplier']));
    }
  
    public function update($id, Request $request)
    {
        $supplier = Supplier::find($id);
        $supplier->update($request->except(['_token','submit']));
        return redirect('/supplier');
    }

    public function destroy($id)
    {
        $destroy = Supplier::find($id);
        $destroy->delete();
        return redirect('/supplier');
    }

}
