@extends('layout/main');

@section('title', 'Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
        </div>
    </div>
</div>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NRP</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $mhs->Nama }}</td>
                <td>{{ $mhs->NRP }}</td>
                <td>{{ $mhs->Email }}</td>
                <td>{{ $mhs->Jurusan }}</td>
                <td>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Siswa</h1>
        </div>
    </div>
</div>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NRP</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $mhs)
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nrp }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->Jurusan }}</td>
                <td>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div @endsection