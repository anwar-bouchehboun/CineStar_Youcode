<?php

namespace App\Http\Controllers;

use App\Models\TodayShowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodayShowingController extends Controller
{
    public function index($film_id)
    {
        $filmDetails = TodayShowing::with(['film', 'film.genre', 'salle', 'salle.zones.seats'])
            ->where('id', $film_id)
            ->firstOrFail();
            //dd($filmDetails);
        return view('films.todays-showing', compact('filmDetails'));
    }
    
}
