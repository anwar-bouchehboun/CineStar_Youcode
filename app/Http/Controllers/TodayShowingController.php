<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodayShowingController extends Controller
{
    public function index()
    {
        $today = now()->toDateString();

        $todayShowings = DB::table('today_showings')
        ->join('films', 'today_showings.film_id', '=', 'films.id')
        ->join('genres', 'films.genre_id', '=', 'genres.id')
        ->select(
            'today_showings.*',
            'films.FilmName',
            'films.FilmImage',    
            'films.FilmDuration', 
            'genres.GenreName'
        )
        ->where('today_showings.date', $today)
        ->get();    

        //dd($todayShowings);
        return view('films.todays-showing',compact('todayShowings'));
    }
}
