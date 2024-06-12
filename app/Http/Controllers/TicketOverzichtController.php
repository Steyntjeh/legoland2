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
        return view('ticketOverzicht', ['tickets' => $tickets]);
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
    public function show(ticketOverzicht $ticketOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticketOverzicht $ticketOverzicht)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ticketOverzicht $ticketOverzicht)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticketOverzicht $ticketOverzicht)
    {
        //
    }
}
