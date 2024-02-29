<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//MODELS
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicsData = config('comics');

        foreach ($comicsData as $index=> $singleComic) {
            $comic = new Comic();
            $comic->title = $singleComic['title'];
            $comic->description = $singleComic['description'];
            $comic->thumb = $singleComic['thumb'];
            $replacedTextPrice = str_replace('$','', $singleComic['price']);
            $comic->price = intval($replacedTextPrice);
            $comic->series = $singleComic['series'];
            $comic->sale_date = $singleComic['sale_date'];
            $comic->type = $singleComic['type'];
            $comic->save();
        }
    }
}
