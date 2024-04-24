<?php

namespace App\Http\Controllers;

use App\Models\Attracties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('details');
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
        $attractie = Attracties::find($id);
        return view('details', ['attractie' => $attractie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(details $details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, details $details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(details $details)
    {
        //
    }
}
