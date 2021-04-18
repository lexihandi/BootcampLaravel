@extends('layouts.master')

@section('title')
    Tambah Buku
@endsection
@section('content')
    <div>
        <form action="/buku" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="judul" id="title" placeholder="Masukkan Judul">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Jumlah Halaman</label>
                <input type="text" class="form-control" name="jumlah_halaman" id="body"
                    placeholder="Masukkan Jumlah Halaman">
                @error('jumlah_halaman')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" id="body" placeholder="Masukkan Tahun Terbit">
                @error('tahun_terbit')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Deskripsi</label>
                <input type="text" class="form-control" name="description" id="body" placeholder="Masukkan Deskripsi">
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="/buku" class="btn btn-danger btn-md">Batal</a>
        </form>
    </div>
@endsection
