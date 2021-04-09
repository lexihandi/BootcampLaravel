@extends('master')

@section('title')
    Cast
@endsection
@section('content')
    <a href="/posts/create" class="btn btn-primary">Tambah</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col" style="display: inline">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($post as $key=>$value)
                <tr>
                    <td>{{ $key + 1 }}</th>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->body }}</td>
                    <td>
                        <a href="/posts/{{ $value->id }}" class="btn btn-info">Show</a>
                        <a href="/posts/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/posts/{{ $value->id }}" method="POST">
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
