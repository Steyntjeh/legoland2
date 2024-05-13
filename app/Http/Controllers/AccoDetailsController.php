<?php

namespace App\Http\Controllers;

use App\Models\Accomodaties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccoDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('accoDetails');
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
    public function show($id)
    {
        $accomodatie = Attracties::find($id);
        return view('accoDetails', ['accomomodatie' => $accomodatie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(accoDetails $accoDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, accoDetails $accoDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accoDetails $accoDetails)
    {
        //
    }
}
