<?php

namespace App\Http\Controllers;

use App\Models\AttractieOverzicht;
use Illuminate\Http\Request;

class AttractieOverzichtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attracties = Attracties::all();
        return view('attracties', ['attracties' => $attracties]);
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
    public function show(AttractieOverzicht $attractieOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttractieOverzicht $attractieOverzicht)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttractieOverzicht $attractieOverzicht)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttractieOverzicht $attractieOverzicht)
    {
        //
    }
}
