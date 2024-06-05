<?php

namespace App\Http\Controllers;

use App\Models\contactOverzicht;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactOverzichtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacten = Contact::all();
        return view('contactOverzicht', ['contacten' => $contacten]);
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
    public function show(contactOverzicht $contactOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contactOverzicht $contactOverzicht)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contactOverzicht $contactOverzicht)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contactOverzicht $contactOverzicht)
    {
        //
    }
}
