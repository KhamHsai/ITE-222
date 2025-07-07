<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){
        return view('Admins.admin');
    }

    public function index(){
         $admins = Admin::all();
        return view('Admins.index', compact('admins'));
    }

    public function store(Request $request){
        $request->validate([
            'admin_name'=>'required|string',
            'admin_age'=>'required|integer',
            'admin_email'=>'required|string',
        ]);

        Admin::create([
            'name'=>$request->admin_name,
            'age'=>$request->admin_age,
            'email'=>$request->admin_email,
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin account created');
    }
}
