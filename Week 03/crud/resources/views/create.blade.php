@extends('master')

@section('title')
    Add Cast
@endsection
@section('content')
    <div>
        <form action="/cast" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" name="name" id="title" placeholder="Masukkan Nama">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Umur</label>
                <input type="text" class="form-control" name="age" id="body" placeholder="Masukkan Umur">
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Bio</label>
                <input type="text" class="form-control" name="bio" id="body" placeholder="Masukkan Bio">
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="/" class="btn btn-danger btn-md">Batal</a>
        </form>
    </div>
@endsection
