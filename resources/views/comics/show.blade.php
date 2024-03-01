@extends('layouts.app')

@section('page-title',$comic->title)

@section('main-content')

<h1>{{ $comic->title }}</h1>

    <div class="container">
        <div class="row">      
                <div class="col">
                    <div class="card">
                        @if ($comic->thumb)
                        <div class="cover">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </div>
                        @endif
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
                            <li>
                                <strong>Descrizione: </strong> {{ $comic->description }}
                            </li>
                            <li>
                                <strong>Data di uscita: </strong> {{ $comic->sale_date }}
                            </li>
                            <li>
                                <strong>Disegnatori: </strong>
                                <ul>
                                    @foreach (json_decode($comic->artists, true) as $artist)
                                        <li>{{ $artist }}</li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <strong>Scrittori: </strong>
                                <ul>
                                    @foreach (json_decode($comic->writers, true) as $writer)
                                        <li>{{ $writer }}</li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <strong>Tipo: </strong> {{ $comic->type }}
                            </li>
                        </ul>
                        <a href="{{ route('comics.index') }}" class="btn btn-dark ">
                            Torna alla Home
                        </a>
                    </div>
                </div>
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
</style>