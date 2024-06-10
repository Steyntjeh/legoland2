<?php

namespace App\Http\Controllers;

use App\Models\Boekingen;
use App\Models\Accomodaties;
use Illuminate\Http\Request;

class BoekingenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodatie = Accomodaties::all();
        return view('boeken', ['accomodatie' => $accomodatie]);
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
        $messages = [
            'vertrek.after' => 'De vertrekdatum moet later zijn dan de aankomstdatum.',
        ];

        // order opslaan in database
        $validatedData = $request->validate([
            'naam' => 'required',
            'email' => 'required',
            'telefoonnummer' => 'required',
            'kamertype' => 'required|string',
            'aankomst' => 'required|date',
            'vertrek' => 'required|date|after:aankomst',
            'aantalPersonen' => 'required'
        ], $messages);

        $boeking = new Boekingen();

        $boeking -> naam = $validatedData['naam'];
        $boeking -> email = $validatedData['email'];
        $boeking -> telefoonnummer = $validatedData['telefoonnummer'];
        $boeking -> kamertype = $validatedData['kamertype'];
        $boeking -> aankomst = $validatedData['aankomst'];
        $boeking -> vertrek = $validatedData['vertrek'];
        $boeking -> aantalPersonen = $validatedData['aantalPersonen']; 

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
