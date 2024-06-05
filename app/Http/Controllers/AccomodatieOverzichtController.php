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
        return view('accomodatieOverzicht', ['accomodaties' => $accomodaties]);
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
    public function show(accomodatiesOverzicht $accomodatiesOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(accomodatiesOverzicht $accomodatiesOverzicht)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, accomodatiesOverzicht $accomodatiesOverzicht)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accomodatiesOverzicht $accomodatiesOverzicht)
    {
        //
    }
}
