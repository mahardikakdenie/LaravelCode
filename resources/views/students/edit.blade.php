@extends('layout/main');

@section('title', 'Detail Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data</h1>
        </div>
    </div>
    <form method="post" action="/students/{{$student->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                placeholder="Masukan nama" name="nama" value="{{$student->nama}}">
            @error('nama')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class=" form-group">
            <label for="nrp">nrp</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp"
                placeholder="Masukan nrp" name="nrp" value="{{$student->nrp}}">
            @error('nrp')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                placeholder="Masukan E-mail" name="email" value="{{$student->email}}">
            @error('email')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Jurusan">Jurusan</label>
            <input type="text" class="form-control @error('Jurusan') is-invalid @enderror" id="Jurusan"
                placeholder="Masukan Jurusan" name="Jurusan" value="{{$student->Jurusan}}">
            @error('Jurusan')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah data</button>
    </form>
</div>
@endsection