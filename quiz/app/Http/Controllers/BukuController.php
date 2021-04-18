<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{

    public function create()
    {
        return view('layouts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:buku',
            'jumlah_halaman' => 'required',
            'tahun_terbit' => 'required',
            'description' => 'required',
        ]);
        $query = DB::table('buku')
            ->insert([
                "judul" => $request["judul"],
                "jumlah_halaman" => $request["jumlah_halaman"],
                "tahun_terbit" => $request["tahun_terbit"],
                "description" => $request["description"],
            ]);
        return redirect('/buku');
    }

    public function index()
    {
        $bukus = DB::table('buku')->get();
        return view('layouts.index', compact('bukus'));
    }

    public function show($id)
    {
        $buku = DB::table('buku')->where('id', $id)->first();
        return view('layouts.show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = DB::table('buku')->where('id', $id)->first();
        return view('layouts.edit', compact('buku'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:buku',
            'jumlah_halaman' => 'required',
            'tahun_terbit' => 'required',
            'description' => 'required',
        ]);
        $query = DB::table('buku')
            ->where('id', $id)
            ->update([
                "judul" => $request["judul"],
                "jumlah_halaman" => $request["jumlah_halaman"],
                "tahun_terbit" => $request["tahun_terbit"],
                "description" => $request["description"],
            ]);
        return redirect('/buku');
    }

    public function destroy($id)
    {
        $query = DB::table('buku')->where('id', $id)->delete();
        return redirect('/buku');
    }
}
