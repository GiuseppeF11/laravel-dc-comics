@extends('layouts.app')

@section('page-title','Comics')

@section('main-content')

<h1>Aggiungi Comic</h1>

<div class="container">
    <div class="row">
        <div class="col py-4">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-light">
                    Torna alla Home
                </a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
    
                <div class="mb-3">
                    <label for="thumb" class="form-label">Poster</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci la SRC..." maxlength="1024">
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="500" required>
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label">Categoria</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la categoria..." maxlength="200">
                    @error('series')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo..." min="1" required>
                    @error('price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="sale-date" class="form-label">Anno di uscita</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale-date" name="sale_date" placeholder="Inserisci l'anno di uscita...">
                    @error('sale_date')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci la tipologia..." min="5" max="20"></input>
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Disegnatori</label>
                    <input class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Inserisci i disegnatori..."></input>
                    @error('artists')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div id="artistHelp" class="form-text">
                        Inserisci i nomi dei disegnatori separati da virgole (senza spazi tra di essi)
                    </div>
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Inserisci gli scrittori..."></input>
                    @error('writers')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div id="writersHelp" class="form-text">
                        Inserisci i nomi degli scrittori separati da virgole (senza spazi tra di essi)
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." required></textarea>
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div>
                    <button type="submit" class="btn btn-success w-100">
                        + Aggiungi
                    </button>
                </div>
    
            </form>
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