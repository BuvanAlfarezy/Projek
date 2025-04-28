<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view("contact.index");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'no' => 'required|string|max:100',
            'message' => 'required|string|max:100',
        ]);

        return redirect()->back()->with('success', 'Pesan Anda Telah Dikirim');
    }
}
