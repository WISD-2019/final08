<?php

namespace App\Http\Controllers;

use App\animal;
use App\application;
use App\User;
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
            'pose_date' => date("Y-m-d",strtotime('8hours')),
            'pass' => '0',
        ]);
        return redirect()->route('member.refuge');
    }


    public function show(application $application)
    {
        $applications = application::all();
        $animals = animal::all();
        $users = User::all();
        $data = ['applications'=>$applications,'animals' => $animals,'users'=>$users];
        return view('showapplication',$data);
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
    public function pass(Request $request,$id)
    {
        $pass_opinion=$request->input('pass_opinion');
        $application = application::find($id);
        $application->review_date=date("Y-m-d",strtotime('8hours'));
        $application->pass = '1';
        $application->pass_opinion=$pass_opinion;
        $animal = animal::find($application->animal_id);
        $animal->member_id = $application->member_id;
        $animal->save();
        $application->save();
        return redirect()->route('application.show');
    }
}
