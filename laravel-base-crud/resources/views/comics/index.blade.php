@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <main>
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="p-5 text-center">Crud Comics</h1>
                    <div class="text-center mb-3">
                        <a href="{{route('comics.create')}}" class="btn btn-success">+ Add Comic</a>
                    </div>
                    @foreach ($comics as $comic)
                        <div class="card align-top p-3 m-2" style="width: 18rem; display:inline-block">
                            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{ $comic->title}}">
                            <div class="card-body mb-5">
                                <h5 class="card-title mb-3 w-80">{{ $comic->title}}</h5>
                                <h6 class="card-subtitle mb-3">{{$comic->description}}</h6>
                                <h6 class="card-subtitle mb-3 text-capitalize">Prezzo:<br>{{ $comic->price}}</h6>
                                <h6 class="card-subtitle mb-3 ">Serie: <br>{{$comic->series}}</h6>
                                <h6 class="card-subtitle mb-3 ">Uscita: <br>{{$comic->sale_date}}</h6>
                                <h6 class="card-subtitle mb-3 ">Tipo: <br>{{ $comic->type }}</h6>
                                <a href="/comics/{{$comic->id}}" class="btn btn-primary">Scheda Comic</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-12">
                    {{$comics->links()}}
                </div>

            </div>
        </div>
    </main>
@endsection
