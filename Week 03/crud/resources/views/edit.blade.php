@extends('master')

@section('title')
    Edit Cast
@endsection
@section('content')
    <div>
        <form action="/cast/{{ $cast->id }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" name="name" id="title" value="{{ $cast->name }}"
                    placeholder="Masukkan Nama">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Umur</label>
                <input type="text" class="form-control" name="age" id="body" value="{{ $cast->age }}"
                    placeholder="Masukkan Umur">
                @error('age')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Bio</label>
                <input type="text" class="form-control" name="bio" id="body" value="{{ $cast->bio }}"
                    placeholder="Masukkan Bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/cast" class="btn btn-danger btn-md">Batal</a>
        </form>
    </div>
@endsection
