@extends('layouts.app')

@section('page-title','Comics')

@section('main-content')

<h1>Comics</h1>

    <div class="container">
        <a href="{{ route('comics.create') }}" class="btn btn-dark my-3 ">
        Aggiungi 
        </a>
        <div class="row row-cols-4">
            @foreach ($comics as $comic)           
                <div class="col mb-3">
                    <div class="card">
                        <div class="cover">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </div>
                        <ul>
                            <li>
                                <strong>Titolo: </strong> {{ $comic->title }}
                            </li>
                            <li>
                                <strong>Categoria: </strong> {{ $comic->series }}
                            </li>
                            <li>
                                <strong>Prezzo: </strong> ${{ $comic->price }}
                            </li>
                        </ul>
                        <a href="{{ route('comics.show', ['comic'=> $comic->id]) }}" class="btn btn-dark ">
                            Vedi
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

<style lang="scss" scoped>
    .cover {
        height: 300px;
        
        
        img {
            height: 100%;
            object-fit: contain;
        }
    }
    .card {
        min-height: 70vh;
        justify-content: space-between
    }
</style>