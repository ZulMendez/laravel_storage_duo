@extends('layouts.index')

@include('layouts.flash')
@section('content')
<section id="membres" class="">
    <div class="container">
        <h1 class="text-light text-center pt-3">MEMBRES</h1>
        <div class="d-flex justify-content-around my-2">
            <a class="btn btn-outline-primary" href={{route('membre.create')}}>ADD ITEM</a>
            <a class="btn btn-outline-secondary" href={{route('admin')}}>BACKOFFICE</a>
        </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">

                @foreach ($membre as $item)
                <div class="col-lg-4 col-md-6 portfolio-item my-5 d-flex">
                    <div class="membres-wrap">
                        <div>
                            <img src={{asset('img/' , $item->image)}} class="img-fluid rounded mw-100" alt="">
                            <h4>{{$item->nom}}</h4>
                            <h4>{{$item->age}}</h4>
                            <h4>{{$item->genre}}</h4>
                        </div>
                        <div class="d-flex portfolio-links d-flex justify-content-center my-3">
                            <a href={{route('membre.show', $item->id)}} class="btn btn-warning mx-1">SHOW</a>
                            <a href={{route('membre.edit', $item->id)}} class="btn btn-success mx-1">EDIT</a>
                            <form method="post" action={{route('membre.destroy', $item->id)}}>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mx-1" type="submit">DELETE</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
@endsection