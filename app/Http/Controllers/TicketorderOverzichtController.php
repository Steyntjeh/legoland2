<?php

namespace App\Http\Controllers;

use App\Models\ticketorderOverzicht;
use App\Models\TicketOrder;
use Illuminate\Http\Request;

class TicketorderOverzichtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketOrders = TicketOrder::all();

        return view('ticketOrders.ticketOrderOverzicht', ['ticketOrders' => $ticketOrders]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ticketorderOverzicht $ticketorderOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ticketOrder = TicketOrder::find($id);
        return view('ticketOrders.ticketOrderUpdate', ['ticketOrder' => $ticketOrder]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'orderNummer' => 'required',
            'ingeplandeDatum' => 'required',
            'email' => 'required',
            'voornaam' => 'required',
            'achternaam' => 'required'
        ]);

        $ticketOrders = TicketOrder::findOrFail($id);

        $ticketOrders -> orderNummer = $validatedData['orderNummer'];
        $ticketOrders -> ingeplandeDatum = $validatedData['ingeplandeDatum'];
        $ticketOrders -> email = $validatedData['email'];
        $ticketOrders -> voornaam = $validatedData['voornaam'];
        $ticketOrders -> achternaam = $validatedData['achternaam'];

        $ticketOrders->save();

        return redirect()->route('ticketOrders.ticketOrderOverzicht')->with('success', 'ticket bestelling bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ticketOrder = TicketOrder::find($id);
        $ticketOrder->delete();

        return redirect()->route('ticketOrders.ticketOrderOverzicht')->with('success', 'ticket bestelling verwijderd');
    }
}
