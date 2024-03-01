@extends('layouts.app')

@section('page-title',$comic->title.' Edit')

@section('main-content')

<h1>{{ $comic->title }} Edit</h1>

<div class="container">
    <div class="row">
        <div class="col py-4">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-dark">
                    Torna alla Home
                </a>
            </div>
            
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT') {{-- I metodi tradizionali sono GET e POST, per inserire PUT/PATCH/DELETE bisogna richiamare la funzione method di Laravel --}}
    
                <div class="mb-3">
                    <label for="thumb" class="form-label">Poster</label>
                    <input type="text" value="{{$comic->thumb}}" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la SRC..." maxlength="1024">
                </div>
    
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                    <input type="text" value="{{$comic->title}}" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="500" required>
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label">Categoria</label>
                    <input type="text" value="{{$comic->series}}" class="form-control" id="series" name="series" placeholder="Inserisci la categoria..." maxlength="200">
                </div>
    
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
                    <input type="number" value="{{$comic->price}}" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo..." min="1" required>
                </div>
    
                <div class="mb-3">
                    <label for="sale-date" class="form-label">Anno di uscita</label>
                    <input type="date" value="{{$comic->sale_date}}" class="form-control" id="sale-date" name="sale_date" placeholder="Inserisci l'anno di uscita...">
                </div>
    
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input value="{{$comic->type}}" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia..." min="5" max="20"></input>
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Disegnatori</label>
                    <input value="{{$comic->artists}}" class="form-control" id="artists" name="artists" placeholder="Inserisci i disegnatori..."></input>
                    <div id="artistHelp" class="form-text">
                        Inserisci i nomi dei disegnatori separati da virgole (senza spazi tra di essi)
                    </div>
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input value="{{$comic->writers}}" class="form-control" id="writers" name="writers" placeholder="Inserisci gli scrittori..."></input>
                    <div id="writersHelp" class="form-text">
                        Inserisci i nomi degli scrittori separati da virgole (senza spazi tra di essi)
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." required>
                       {{$comic->description}}
                    </textarea>
                </div>
    
                <div>
                    <button type="submit" class="btn btn-success w-100">
                        Aggiorna
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