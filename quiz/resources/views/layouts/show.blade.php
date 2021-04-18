@extends('layouts.master')

@section('title')
    Show Buku {{ $buku->id }}
@endsection
@section('content')
    <h4>Judul: {{ $buku->judul }}</h4>
    <h4>Jumlah Halaman: {{ $buku->jumlah_halaman }}</h4>
    <h4>Tahun Terbit: {{ $buku->tahun_terbit }}</h4>
    <h4>Description: {{ $buku->description }}</h4>
    <br>
    <a href="/buku" class="btn btn-danger btn-md">Kembali</a>
@endsection
