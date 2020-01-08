<?php

namespace App\Http\Controllers;

use App\adoptionstatus;
use App\application;
use Illuminate\Http\Request;

class AdoptionstatusController extends Controller
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
        return view('createadoptionstatus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal_id=$request->input('animal_id');
        $status=$request->input('status');

        adoptionstatus::create([
            'animal_id' =>$animal_id,
            'return_date' => date("Y-m-d",strtotime('8hours')),
            'status' => $status,
        ]);
        return redirect()->route('member.refuge');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adoptionstatus  $adoptionstatus
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $adoptionstatuses = adoptionstatus::all();
        $data = ['adoptionstatuses' => $adoptionstatuses];
        return view('adoptionstatus',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adoptionstatus  $adoptionstatus
     * @return \Illuminate\Http\Response
     */
    public function edit(adoptionstatus $adoptionstatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adoptionstatus  $adoptionstatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adoptionstatus $adoptionstatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adoptionstatus  $adoptionstatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(adoptionstatus $adoptionstatus)
    {
        //
    }
}
