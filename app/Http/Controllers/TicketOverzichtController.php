<?php

namespace App\Http\Controllers;

use App\Models\ticketOverzicht;
use App\Models\tickets;
use Illuminate\Http\Request;

class TicketOverzichtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Tickets::all();
        return view('tickets.ticketOverzicht', ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.ticketForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ticketPrijs' => 'required',
            'soortTicket' => 'required'
        ]);

        $tickets = new Tickets();

        $tickets -> naamAttractie = $validatedData['ticketPrijs'];
        $tickets -> tijdsDuur = $validatedData['soortTicket'];

        $tickets->save();

        return redirect()->route('tickets.ticketOverzicht')->with('success', 'Ticket toegevoegd');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ticket = Tickets::find($id);
        return view('tickets.ticketUpdate', ['ticket' => $ticket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ticketPrijs' => 'required',
            'soortTicket' => 'required'
        ]);

        $tickets = Tickets::findOrFail($id);

        $tickets -> naamAttractie = $validatedData['ticketPrijs'];
        $tickets -> tijdsDuur = $validatedData['soortTicket'];

        $tickets->save();

        return redirect()->route('tickets.ticketOverzicht')->with('success', 'Ticket bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ticket = Tickets::find($id);
        $ticket->delete();

        return redirect()->route('tickets.ticketOverzicht')->with('success', 'ticket verwijderd');
    }
}
