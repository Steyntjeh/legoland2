<?php

namespace App\Http\Controllers;

use App\Models\Boekingen;
use Illuminate\Http\Request;

class BoekingenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodaties = Accomodaties::all();
        return view('accomodaties', ['accomodaties' => $accomodaties]);
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
            'naam' => 'required',
            'email' => 'required',
            'telefoonnummer' => 'required',
            'aankomst' => 'required',
            'vertrek' => 'required',
            'aantal_personen' => 'required'
        ]);

        $boeking = new Boekingen();

        $boeking -> naam = $validatedData['naam'];
        $boeking -> email = $validatedData['email'];
        $boeking -> telefoonnummer = $validatedData['telefoonnummer'];
        $boeking -> aantal_personen = $validatedData['aantal_personen']; 

        $boeking->save();

        return redirect('/geboekt');

    }

    /**
     * Display the specified resource.
     */
    public function show(Boekingen $boekingen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boekingen $boekingen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boekingen $boekingen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boekingen $boekingen)
    {
        //
    }
}
