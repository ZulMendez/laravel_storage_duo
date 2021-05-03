@extends('layouts.index')

@section('content')
    <h1 class="text-center text-light pt-3">HOME</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-success mb-5" href="{{route('admin')}}">BACKOFFICE</a>
    </div>
@endsection