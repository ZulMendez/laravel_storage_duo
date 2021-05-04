@extends('layouts.index')

@section('content')
    <section class="bg-secondary">
        <div class="container text-center">
            <h1 class="text-light pt-3">ADD MEMBER</h1>
            <a class="btn btn-outline-dark mb-2" href="{{route('membre.index')}}">BACK</a>
            <form class="container col-6" method="POST" action={{route('membre.store')}} enctype="multipart/form-data">
                @csrf
                <br>
                <label class="font-weight-bold" for="image">IMAGE</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" placeholder="add image" name="image">
                @error('image')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="nom">NOM</label>
                <input type="text" class="form-control-file @error('nom') is-invalid @enderror" id="nom" placeholder="add name" name="nom">
                @error('nom')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="age">AGE</label>
                <input type="number" class="form-control-file @error('age') is-invalid @enderror" id="age" placeholder="add age" name="age">
                @error('age')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="genre">GENRE</label>
                <select class="form-control-file @error('genre') is-invalid @enderror" id="genre" placeholder="add genre" name="genre">
                    @foreach ($genres as $item)
                    <option value="genre">{{$item->genre}}</option>
                    @endforeach
                </select>
                @error('genre')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <button class="btn btn-info mb-5" type="submit">SUBMIT</button>
            </form>
        </div>
    </section>
@endsection