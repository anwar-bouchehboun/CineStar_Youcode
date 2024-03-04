<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchFilms(Request $request)
    {
        $request->validate([
            'film_name' => 'string',
        ]);

        $query = Film::query();

        if ($request->has('film_name')) {
            $filmName = $request->input('film_name');
            $query->where('FilmName', 'ILIKE', '%' . $filmName . '%');
        }

        $films = $query->get();
        //dd($films);

        return view('search_results', compact('films'));
    }
}
