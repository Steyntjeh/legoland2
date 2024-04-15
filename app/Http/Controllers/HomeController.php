<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = [
        //     ['id' => 1, 'title' => 'First Post', 'content' => 'This is the first post'],
        //     ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the second post'],
        //     ['id' => 3, 'title' => 'Third Post', 'content' => 'This is the third post'],
        //     ['id' => 4, 'title' => 'Fourth Post', 'content' => 'This is the fourth post']
        // ];
        // return view();
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
