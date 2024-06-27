<?php

namespace App\Http\Controllers;

use App\Models\adminOverzicht;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminOverzichtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = User::all();

        return view('admins.adminOverzicht', ['admins' => $admins]);
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
    public function show(adminOverzicht $adminOverzicht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();

        return redirect()->route('admins.adminOverzicht')->with('success', 'Admin verwijderd');
    }
}
