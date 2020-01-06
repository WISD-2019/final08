<?php

namespace App\Http\Controllers;

use App\animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        $animals = animal::all();
        $data = ['animals' => $animals];
        return view('animal',$data);
    }

    public function search(Request $request)
    {
        $keyword =$request->input('keyword');
        $animals = animal::where('id','LIKE',"%$keyword%")->get();
        $data = ['animals' => $animals];
        return view('animal',$data);
    }

    public function edit(animal $animal)
    {
        //
    }

    public function update(Request $request, animal $animal)
    {
        //
    }


    public function destroy(animal $animal)
    {
        //
    }
}
