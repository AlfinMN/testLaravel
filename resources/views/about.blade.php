@extends('layout.main')


@section('title','About')

@section('card')
<div class="card">
    <div class="card-header">
        ini about
    </div>
    <div class="card-body">
        <h5 class="card-title">Tentang Saya</h5>
        <p class="card-text">nama saya, <?= $nama; ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endsection