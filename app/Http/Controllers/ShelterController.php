<?php

namespace App\Http\Controllers;

use App\animal;
use App\shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shelter  $shelter
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $shelters = shelter::all();
        $data = ['shelters' => $shelters];
        return view('shelter',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shelter  $shelter
     * @return \Illuminate\Http\Response
     */
    public function edit(shelter $shelter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shelter  $shelter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shelter $shelter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shelter  $shelter
     * @return \Illuminate\Http\Response
     */
    public function destroy(shelter $shelter)
    {
        //
    }
    public function animal()
    {
        $animals = animal::all();
        $data = ['animals' => $animals];
        return view('shelteranimal',$data);
    }
}
