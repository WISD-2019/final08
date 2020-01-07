<?php

namespace App\Http\Controllers;

use App\animal;
use App\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
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
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        //
    }

    public function addanimal()
    {
        return view('addanimal');
    }

    public function storeanimal(Request $request)
    {
        $kind=$request->input('kind');
        $variety=$request->input('variety');
        $gender=$request->input('gender');
        $age=$request->input('age');
        $size=$request->input('size');
        $users = Auth::user()->id;
        $staffs = staff::where('user_id',$users);
        animal::create([
           'staff_id' =>'2',
           'shelter_id' =>'1',
           'kind' => $kind,
           'variety' => $variety,
           'gender' => $gender,
            'age' => $age,
            'size' => $size
        ]);
        return redirect()->route('member.refuge');
    }

    public function deleteanimal($id)
    {
        $animal = animal::find($id);
        $animal->delete();
        return redirect()->route('shelter.animal');
    }
}
