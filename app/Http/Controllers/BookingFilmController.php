<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingFilmController extends Controller
{
    public function index(){
        return view('films.booking-film');
    }
}
