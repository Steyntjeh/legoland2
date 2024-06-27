<?php

namespace App\Http\Controllers;

use App\Models\boekOverzicht;
use App\Models\Boekingen;
use Illuminate\Http\Request;

class BoekOverzichtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boekingen = Boekingen::all();
        return view('boekingen.boekOverzicht', ['boekingen' => $boekingen]);
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(boekOverzicht $boekOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $boeking = Boekingen::find($id);
        return view('boekingen.boekUpdate', compact('boeking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'vertrek.after' => 'De vertrekdatum moet later zijn dan de aankomstdatum.',
        ];

        $validatedData = $request->validate([
            'naam' => 'required|string',
            'email' => 'required',
            'telefoonNummer' => 'required',
            'kamerType' => 'required',
            'aankomst' => 'required|date',
            'vertrek' => 'required|date|after:aankomst',
            'aantalPersonen' => 'required'
        ], $messages);

        $boekingen = Boekingen::findOrFail($id);

        $boekingen -> naam = $validatedData['naam'];
        $boekingen -> email = $validatedData['email'];
        $boekingen -> telefoonNummer = $validatedData['telefoonNummer'];
        $boekingen -> kamerType = $validatedData['kamerType'];
        $boekingen -> aankomst = $validatedData['aankomst'];
        $boekingen -> vertrek = $validatedData['vertrek'];
        $boekingen -> aantalPersonen = $validatedData['aantalPersonen'];

        $boekingen->save();

        return redirect()->route('boekingen.boekOverzicht')->with('success', 'Boeking bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $boeking = Boekingen::find($id);
        $boeking->delete();

        return redirect()->route('boekingen.boekOverzicht')->with('success', 'boeking verwijderd');
    }
}
