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
            'name' => 'required|unique:casts',
            'age' => 'required',
            'bio' => 'required',
        ]);
        $query = DB::table('casts')
            ->insert([
                "name" => $request["name"],
                "age" => $request["age"],
                "bio" => $request["bio"],
            ]);
        return redirect('/');
    }

    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('index', compact('casts'));
    }

    public function show($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('show', compact('cast'));
    }

    public function edit($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('edit', compact('cast'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cast',
            'age' => 'required',
            'bio' => 'required',
        ]);
        $query = DB::table('casts')
            ->where('id', $id)
            ->update([
                "name" => $request["name"],
                "age" => $request["age"],
                "bio" => $request["bio"],
            ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        $query = DB::table('casts')->where('id', $id)->delete();
        return redirect('/');
    }
}
