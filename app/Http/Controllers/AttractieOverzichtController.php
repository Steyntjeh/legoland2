<?php

namespace App\Http\Controllers;

use App\Models\AttractieOverzicht;
use App\Models\Attracties;
use Illuminate\Http\Request;

class AttractieOverzichtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attracties = Attracties::all();
        return view('attractieOverzicht', compact('attracties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attractieForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naamAttractie' => 'required|string',
            'tijdsDuur' => 'required',
            'informatie' => 'required|string',
            'lengte' => 'required',
            'imageUrl' => 'required|string',
            'minimaleLengte' => 'required'
        ]);

        $attracties = new Attracties();

        $attracties -> naamAttractie = $validatedData['naamAttractie'];
        $attracties -> tijdsDuur = $validatedData['tijdsDuur'];
        $attracties -> informatie = $validatedData['informatie'];
        $attracties -> lengte = $validatedData['lengte'];
        $attracties -> image = $validatedData['imageUrl'];
        $attracties -> minimaleLengte = $validatedData['minimaleLengte'];

        $attracties->save();

        return redirect()->route('attractieOverzicht')->with('success', 'Attractie toegevoegd');
    }

    /**
     * Display the specified resource.
     */
    public function show(AttractieOverzicht $attractieOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $attractie = Attracties::find($id);
        return view('attractieUpdate', compact('attractie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'naamAttractie' => 'required|string',
            'tijdsDuur' => 'required',
            'informatie' => 'required|string',
            'lengte' => 'required',
            'imageUrl' => 'required|string',
            'minimaleLengte' => 'required'
        ]);

        $attracties = Attracties::findOrFail($id);

        $attracties -> naamAttractie = $validatedData['naamAttractie'];
        $attracties -> tijdsDuur = $validatedData['tijdsDuur'];
        $attracties -> informatie = $validatedData['informatie'];
        $attracties -> lengte = $validatedData['lengte'];
        $attracties -> image = $validatedData['imageUrl'];
        $attracties -> minimaleLengte = $validatedData['minimaleLengte'];

        $attracties->save();

        return redirect()->route('attractieOverzicht')->with('success', 'Attractie bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $attractie = Attracties::find($id);
        $attractie->delete();

        return redirect()->route('attractieOverzicht')->with('success', 'Attractie verwijderd');
    }
}
