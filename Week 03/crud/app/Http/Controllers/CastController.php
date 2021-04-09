<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cast',
            'age' => 'required',
            'bio' => 'required',
        ]);
        $query = DB::table('casts')->insert([
            "name" => $request["name"],
            "age" => $request["age"],
            "bio" => $request["bio"],
        ]);
        return redirect('/cast');
    }

    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('index', compact('casts'));
    }

    public function show($id)
    {
        $casts = DB::table('casts')->where('id', $id)->first();
        return view('show', compact('casts'));
    }

    public function edit($id)
    {
        $casts = DB::table('casts')->where('id', $id)->first();
        return view('edit', compact('casts'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cast',
            'age' => 'required',
            'bio' => 'required',
        ]);
        $query = DB::table('casts')->insert([
            "name" => $request["name"],
            "age" => $request["age"],
            "bio" => $request["bio"],
        ]);
        return redirect('/cast');
    }

    public function destroy($id)
    {
        $query = DB::table('casts')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
