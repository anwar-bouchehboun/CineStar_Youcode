<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function reserveSeats(Request $request)
{
    // Validate the request data as needed
   /* $request->validate([
        'today_showing_id' => 'required',
        'salle_id' => 'required',
        'zone_id' => 'required',
        'selected_seats' => 'required|array',
    ]);

    // Add your reservation logic here
    $user = auth()->user(); // Assuming you have authentication in place
    $reservationTime = now(); // You may customize this based on your requirements

    foreach ($request->selected_seats as $seatId) {
        Reserve::create([
            'user_id' => $user->id,
            'today_showing_id' => $request->today_showing_id,
            'salle_id' => $request->salle_id,
            'seat_id' => $seatId,
            'reservation_time' => $reservationTime,
        ]);
    }*/

    // Redirect or respond as needed
    return redirect()->back()->with('success', 'Seats reserved successfully');
}
}
