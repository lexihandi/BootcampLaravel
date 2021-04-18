@extends('layouts.master')

@section('title')
    Buku
@endsection
@section('content')
    <a href="/buku/create" class="btn btn-primary">Tambah</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Jumlah Halaman</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bukus as $key=>$value)
                <tr>
                    <td>{{ $key + 1 }}</th>
                    <td>{{ $value->judul }}</td>
                    <td>{{ $value->jumlah_halaman }}</td>
                    <td>{{ $value->tahun_terbit }}</td>
                    <td>{{ $value->description }}</td>
                    <td>
                        <a href="/buku/{{ $value->id }}" class="btn btn-info">Show</a>
                        <a href="/buku/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/buku/{{ $value->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>No data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
