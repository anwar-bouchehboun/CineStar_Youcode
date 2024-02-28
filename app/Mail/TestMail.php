<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

// use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestMail extends Mailable
{

    use Queueable, SerializesModels;

    public $subject;
    public $body;
    public $user;
    public $reservationData;
    public $QR;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $body, $reservationData, $QR)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->user = Auth::user();
        $this->reservationData = $reservationData;
        $this->QR = $QR;


    }

    public function build()
    {


        return $this->subject($this->subject)
            ->view('email')
            ->with([
                'body' => $this->body,
                'user' => $this->user,
                'reservationData' => $this->reservationData,
                'Qr' => $this->QR
            ]);
    }


}