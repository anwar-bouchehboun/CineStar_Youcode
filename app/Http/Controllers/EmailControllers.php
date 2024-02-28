<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EmailControllers extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $subject = 'Ticket';
        $body = 'CINESTAR ';
        $qrcode = QrCode::size(200)->generate("Je suis un QR Code");

        Mail::to($user->email)->send(new TestMail($subject, $body,$qrcode ));
    }
}