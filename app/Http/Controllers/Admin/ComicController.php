<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Form Requests
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

// Models
use App\Models\Comic;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)  //scrittura con dependency injection
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(StoreComicRequest $request)
    {
        $validatedData = $request->validated();

        $comic = Comic::create($validatedData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }


    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $validatedData = $request->validated();

        $comic->update($validatedData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
