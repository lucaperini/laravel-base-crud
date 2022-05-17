@extends('layouts.main')

@section('title', 'Comic detail')

@section('main-content')

    <main>
        <div class="card p-5 mx-auto text-center w-50 h-50">
            <h5 class="card-header">{{ $comic->title }}</h5>
            <img src="{{$comic->thumb}}" class="card-img-small p-5" alt="...">
            <div class="card-body">
                <h5 class="card-title">Descrizione</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <h5 class="card-title">Prezzo</h5>
                <p class="card-text">{{ $comic->price }}</p>
                <h5 class="card-title">Serie</h5>
                <p class="card-text">{{ $comic->series }}</p>
                <h5 class="card-title">Prima pubblicazione</h5>
                <p class="card-text">{{$comic->date}}</p>
                <h5 class="card-title">Tipo</h5>
                <p class="card-text">{{ $comic->type }}</p>
                <a href="{{route('comics.index')}}" class="btn btn-primary">Torna alla Home</a>

            </div>
        </div>
    </main>
@endsection
