<?php

namespace App\Http\Controllers;

use App\Models\accomodatiesOverzicht;
use App\Models\Accomodaties;
use Illuminate\Http\Request;

class AccomodatieOverzichtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodaties = Accomodaties::all();
        return view('accomodaties.accomodatieOverzicht', ['accomodaties' => $accomodaties]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accomodaties.accomodatieForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'aantalPersonen' => 'required',
            'kostenPerNacht' => 'required',
            'informatie' => 'required|string',
            'facilities' => 'required|string',
            'imageUrl' => 'required|string'
        ]);

        $accomodaties = new Accomodaties();

        $accomodaties -> type = $validatedData['type'];
        $accomodaties -> aantalPersonen = $validatedData['aantalPersonen'];
        $accomodaties -> kostenPerNacht = $validatedData['kostenPerNacht'];
        $accomodaties -> informatie = $validatedData['informatie'];
        $accomodaties -> facilities = $validatedData['facilities'];
        $accomodaties -> image = $validatedData['imageUrl'];

        $accomodaties->save();

        return redirect()->route('accomodaties.accomodatieOverzicht')->with('success', 'Accommodatie toegevoegd');
    }

    /**
     * Display the specified resource.
     */
    public function show(accomodatiesOverzicht $accomodatiesOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $accomodatie = Accomodaties::find($id);
        return view('accomodaties.accomodatieUpdate', ['accomodatie' => $accomodatie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'aantalPersonen' => 'required',
            'kostenPerNacht' => 'required',
            'informatie' => 'required|string',
            'facilities' => 'required|string',
            'imageUrl' => 'required|string'
        ]);
    
        $accomodatie = Accomodaties::findOrFail($id);
    
        $accomodatie->type = $validatedData['type'];
        $accomodatie->aantalPersonen = $validatedData['aantalPersonen'];
        $accomodatie->kostenPerNacht = $validatedData['kostenPerNacht'];
        $accomodatie->informatie = $validatedData['informatie'];
        $accomodatie->facilities = $validatedData['facilities'];
        $accomodatie->image = $validatedData['imageUrl'];
    
        $accomodatie->save();
    
        return redirect()->route('accomodaties.accomodatieOverzicht')->with('success', 'Accommodatie bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $accomodatie = Accomodaties::find($id);
        $accomodatie->delete();

        return redirect()->route('accomodaties.accomodatieOverzicht')->with('success', 'Accommodatie verwijderd');
    }
}
