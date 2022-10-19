<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use DB;

class AdminController extends Controller
{
    public function index()
    {
    	$admin = DB::table('tbl_admin')->get();
        return view('admin.index',compact(['admin']));
    }

     public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $store = Admin::create([
            
            'username' => $request->username,
            'password' => $request->password,
            'admin_level' => $request->admin_level,
            'admin_nama' => $request->admin_nama,
            'admin_status' => $request->admin_status,
        ]);

        echo $store->id_admin;
        return redirect('/admin');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit',compact(['admin']));
    }
  
    public function update($id, Request $request)
    {
        $admin = Admin::find($id);
        $admin->update($request->except(['_token','submit']));
        return redirect('/admin');
    }

    public function destroy($id)
    {
        $destroy = Admin::find($id);
        $destroy->delete();
        return redirect('/admin');
    }
}