@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')

    <h1>Comics</h1>

    <div class="container">
        <a href="{{ route('comics.create') }}" class="btn btn-light my-3 ">
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
                        <div class="row">
                            <div class="col d-flex justify-content-center ">
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-success ">
                                    Vedi
                                </a>
                            </div>
                            <div class="col d-flex  justify-content-center ">
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning ">
                                    Modifica
                                </a>
                            </div>
                            <div class="col d-flex  justify-content-center ">
                                <form 
                                    id="delete-form" {{-- onsubmit="return confirm('Sei sicuro di voler eliminare questo elemento?');" --}} {{-- FONDAMENTALE per evitare eliminazioni definitive (esperienza utente) --}} class="d-inline-block"
                                    action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">
                                        Elimina
                                    </button>
                                </form>
                            </div>
                            <script>
                                function confirmDelete() {
                                    return confirm('Sei sicuro di voler eliminare questo elemento?');
                                }
                            </script>
                        </div>
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
