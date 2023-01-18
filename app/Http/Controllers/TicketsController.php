<?php

namespace App\Http\Controllers;
use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function tickets()
    {
        return view('tickets');
    }

    public function display_ticket(Request $request)
    {
        $ticket = new Tickets;
        $ticket->user_id = $request->user_id;
        $ticket->qr_hash = $request->qr_hash;
        $ticket->event_id = $request->event_id;
        $ticket->save();
        return redirect('/')->with('status', 'Ticket bought');
    }
}
