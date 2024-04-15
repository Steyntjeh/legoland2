<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use App\Models\TicketOrder;
use App\Models\OrderLine;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Tickets::all();
        return view('tickets', ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // order opslaan in database
        $validatedData = $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'email' => 'required|email',
            'soortTicket' => 'required'
        ]);
        
        $order = new TicketOrder();
        
        $order -> voornaam = $validatedData['voornaam'];
        $order -> achternaam = $validatedData['achternaam'];
        $order -> email = $validatedData['email'];

        $order -> save();

        foreach($request->tickets as $ticketId => $amount){
            $orderid = $order->id;
            $orderline = new OrderLine();
            $orderline->ticket_id = $ticketId;
            $orderline->order_id = $orderid;
            $orderline->quantity = $amount;

            $orderline->save();
        }

        return redirect('/besteld');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}
