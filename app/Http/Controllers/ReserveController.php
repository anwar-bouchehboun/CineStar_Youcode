<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Reserve;
use App\Models\Seat;
use App\Models\TodayShowing;
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
        $reservationData = [];


        $filmDetails = TodayShowing::with(['film', 'film.genre', 'salle', 'salle.zones.seats'])
            ->where('id', $request->today_showing_id)
            ->firstOrFail();

        $salleDetails = $filmDetails->salle;
        $zoneDetails = $salleDetails->zones->where('id', $request->zone_id)->first();

        foreach ($request->selected_seats as $seatId) {
            Seat::where('id', $seatId)->update(['seat_status' => 'reserved']);

            $reservationData[] = [
                'filmName' => $filmDetails->film->FilmName,
                'salleName' => $salleDetails->saleName,
                'zoneName' => $zoneDetails->zone_name,
                'seatNumber' => Seat::find($seatId)->seat_number,
                'showingTime' => $filmDetails->showing_time,
            ];



            Reserve::create([
                'user_id' => $user->id,
                'today_showing_id' => $request->today_showing_id,
                'salle_id' => $request->salle_id,
                'zone_id' => $request->zone_id,
                'seat_id' => $seatId,
                'reservation_time' => $reservationTime,
            ]);
        }

        $subject = 'Ticket';
        $body = 'CINESTAR';

        Mail::to($user->email)->send(new TestMail($subject, $body, $reservationData));


        return redirect()->back()->with('success', 'Seats reserved successfully');
    }




}