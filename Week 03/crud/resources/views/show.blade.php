@extends('master')

@section('title')
    Show Cast {{ $cast->id }}
@endsection
@section('content')
    <h4>Nama: {{ $cast->name }}</h4>
    <h4>Umur: {{ $cast->age }}</h4>
    <h4>Bio: {{ $cast->bio }}</h4>
    <br>
    <a href="/cast" class="btn btn-danger btn-md">Kembali</a>
@endsection
