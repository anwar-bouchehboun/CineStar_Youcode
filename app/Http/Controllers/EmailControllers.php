<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailControllers extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $subject = 'Ticket';
        $body = 'CODE Qr Message ';

        Mail::to($user->email)->send(new TestMail($subject, $body));
    }
}