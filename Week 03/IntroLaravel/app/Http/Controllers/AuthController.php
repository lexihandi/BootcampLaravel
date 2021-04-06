<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $namaDepan = $request->firstname;
        $namaBelakang = $request->lastname;

        return redirect()->route('welcome')->with(['namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang]);
    }

    public function welcome(Request $request)
    {
        return view('welcome');
    }
}
