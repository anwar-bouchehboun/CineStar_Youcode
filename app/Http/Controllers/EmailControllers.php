<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailControllers extends Controller
{
    public function index()
    {
       // $user = Auth::user();

       // $subject = 'Ticket';
       // $body = 'CINESTAR ';

       // Mail::to($user->email)->send(new TestMail($subject, $body));
    }
}
