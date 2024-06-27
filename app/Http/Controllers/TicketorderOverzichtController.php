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
    public function edit(ticketorderOverzicht $ticketorderOverzicht)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ticketorderOverzicht $ticketorderOverzicht)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticketorderOverzicht $ticketorderOverzicht)
    {
        //
    }
}
