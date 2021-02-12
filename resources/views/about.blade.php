@extends('layout/main');

@section('title', 'About')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Hello, {{$nama}}!</h1>
        </div>
    </div>
</div>
@endsection