@extends('layout.main')


@section('title','Data UMKM')
@section('card')

<table class="table">
    <thead class="table table-striped table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Produk</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($umkm as $u)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$u->nama}}</td>
            <td>{{$u->produk}}</td>
            <td><a href="#">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection