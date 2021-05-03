@extends('layouts.index')

@section('content')
    <h1 class="text-center text-light pt-3">BACKOFFICE</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-success mx-1 mb-5" href="{{route('membre.index')}}">MEMBRES</a>
        <a class="btn btn-primary mb-5" href="{{route('home')}}">BACK</a>
    </div>
@endsection