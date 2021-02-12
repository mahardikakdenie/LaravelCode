@extends('layout/main');

@section('title', 'Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
        </div>
    </div>

    <a href="/students/create" class="btn btn-primary my-3">Tambah data</a>
    @if (@session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    @if (@session('delete'))
    <div class="alert alert-danger">
        {{session('delete')}}
    </div>
    @endif

    <ul class="list-goup">
        @foreach($students as $std)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$std->nama}}
            <a href="/students/{{$std->id}}" class="badge badge-info">Detail</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection