<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){
        return view("admin.admin");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'no' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'role'   => 'required|in:Super Admin,Kasir'
        ]);

        return redirect()->back()->with('success', 'Pesan Anda Telah Dikirim');
    }
}
