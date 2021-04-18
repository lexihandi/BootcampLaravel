@extends('layouts.master')

@section('title')
    Edit Buku
@endsection
@section('content')
    <div>
        <form action="/buku/{{ $buku->id }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="judul" id="title" value="{{ $buku->judul }}"
                    placeholder="Masukkan Judul">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Jumlah Halaman</label>
                <input type="text" class="form-control" name="jumlah_halaman" id="body"
                    value="{{ $buku->jumlah_halaman }}" placeholder="Masukkan Jumlah Halaman">
                @error('jumlah_halaman')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" id="body" value="{{ $buku->tahun_terbit }}"
                    placeholder="Masukkan Tahun Terbit">
                @error('tahun_terbit')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Deskripsi</label>
                <input type="text" class="form-control" name="description" id="body" value="{{ $buku->description }}"
                    placeholder="Masukkan Deskripsi">
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/buku" class="btn btn-danger btn-md">Batal</a>
        </form>
    </div>
@endsection
