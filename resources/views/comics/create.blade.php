@extends('layouts.app')

@section('page-title','Comics')

@section('main-content')

<h1>Aggiungi Comic</h1>

<div class="container">
    <div class="row">
        <div class="col py-4">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-dark">
                    Torna alla Home
                </a>
            </div>
            
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
    
                <div class="mb-3">
                    <label for="thumb" class="form-label">Poster</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la SRC..." maxlength="1024">
                </div>
    
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="500" required>
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la categoria..." maxlength="200">
                </div>
    
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo..." min="1" required>
                </div>
    
                <div class="mb-3">
                    <label for="sale-date" class="form-label">Anno di uscita</label>
                    <input type="date" class="form-control" id="sale-date" name="sale_date" placeholder="Inserisci l'anno di uscita...">
                </div>
    
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input class="form-control" id="type" name="type" placeholder="Inserisci la tipologia..." min="5" max="20"></input>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." required></textarea>
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