<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Reserve;
use App\Models\Seat;
use Auth;
use Illuminate\Http\Request;
use Mail;

class ReserveController extends Controller
{
    public function reserveSeats(Request $request)
    {
        $request->validate([
            'today_showing_id' => 'required',
            'salle_id' => 'required',
            'zone_id' => 'required',
            'selected_seats' => 'required|array',
        ]);
    
        $user = auth()->user();
        $reservationTime = now();
        $reservationData = []; // Initialize an array to store reservation details
    
        foreach ($request->selected_seats as $seatId) {
            Seat::where('id', $seatId)->update(['seat_status' => 'reserved']);
    
            $reservation = Reserve::create([
                'user_id' => $user->id,
                'today_showing_id' => $request->today_showing_id,
                'salle_id' => $request->salle_id,
                'seat_id' => $seatId,
                'reservation_time' => $reservationTime,
            ]);
    
            // Store reservation details in the $reservationData array
       
            //dd($reservation);
            
            //$reservationData[] = $reservation;
            dd($reservationData);

        }
    
        // Send email with reservation confirmation
        $subject = 'Ticket';
        $body = 'CINESTAR';
    
        // Pass $reservationData to the TestMail class
        Mail::to($user->email)->send(new TestMail($subject, $body, $reservationData));
    
        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Seats reserved successfully');
    }
    
}
