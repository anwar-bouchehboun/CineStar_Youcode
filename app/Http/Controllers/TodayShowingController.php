<?php

namespace App\Http\Controllers;

use App\Models\TodayShowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodayShowingController extends Controller
{
    public function index()
{
    $today = now()->toDateString();

    $todayShowings = TodayShowing::with(['film', 'film.genre', 'salle', 'salle.zones.seats'])
        ->where('date', $today)
        ->get();
    //dd($todayShowings);

    return view('films.todays-showing', compact('todayShowings'));
}
}
