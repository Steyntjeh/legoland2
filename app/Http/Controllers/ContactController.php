<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // contact formulier opslaan in de database

        $validatedData = $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'email' => 'required',
            'telefoonNummer' => 'required | max:10',
            'orderNummer' => 'required',
            'bericht' => 'required',
        ]);

        $contact = new Contact;
        $contact->voornaam = $validatedData['voornaam'];
        $contact->achternaam = $validatedData['achternaam'];
        $contact->email = $validatedData['email'];
        $contact->telefoonNummer = $validatedData['telefoonNummer'];
        $contact->orderNummer = $validatedData['orderNummer'];
        $contact->bericht = $validatedData['bericht'];

        $contact->save();

        return redirect('/verzonden');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contact', ['post' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
