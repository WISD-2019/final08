<?php

namespace App\Http\Controllers;

use App\admin;
use App\shelter;
use Illuminate\Http\Request;

class AdminController extends Controller
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
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }

    public function addshelter()
    {
        return view('addshelter');
    }

    public function storeshelter(Request $request)
    {
        $name=$request->input('name');
        $phone=$request->input('phone');
        $address=$request->input('address');
        $public=$request->input('public');
        if($public=='公立')
            $publics=1;
        else
            $publics=0;
        shelter::create([
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'public' => $publics,
        ]);
        return redirect()->route('member.refuge');
    }

    public function shelter()
    {
        $shelters = shelter::all();
        $data = ['shelters' => $shelters];
        return view('adminshelter',$data);
    }
    public function deleteshelter($id)
    {
        $shelters = shelter::find($id);
        $shelters->delete();
        return redirect()->route('admin.shelter');
    }
}
