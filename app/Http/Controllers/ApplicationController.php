<?php

namespace App\Http\Controllers;

use App\animal;
use App\application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function index()
    {
        //
    }

    public function create($id)
    {
        $animal = animal::find($id);
        $data = ['animal' => $animal];
        return view('application',$data);
    }

    public function store(Request $request,$id)
    {
        $reason=$request->input('reason');
        $environment=$request->input('environment');
        application::create([
            'animal_id' => $id,
            'member_id' => auth()->user()->id,
            'reason' =>$reason,
            'environment' => $environment,
            'pose_date' => date("Y-m-d",strtotime('8hours'))
        ]);
        return view('welcome');
    }


    public function show(application $application)
    {
        //
    }

    public function edit(application $application)
    {
        //
    }

    public function update(Request $request, application $application)
    {
        //
    }


    public function destroy(application $application)
    {
        //
    }
}
