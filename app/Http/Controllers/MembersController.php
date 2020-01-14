<?php

namespace App\Http\Controllers;

use App\members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembersController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }
    /**
     * @param $id
     */

    public function refuge()
    {
        if(Auth::user()==null){
            return view('refuge');
        }
        $check =Auth::user()->type;
        if($check == 1)
            return view('refuge');
        if($check ==2)
            return view('welcome2');
    }

    public function store(Request $request)
    {
        $date=$request->input('date');
        $number=$request->input('number');
        $phone=$request->input('phone');
        members::create([
            'user_id' => auth()->user()->id,
            'date' =>$date,
            'number' => $number,
            'phone' => $phone
        ]);
        return redirect()->route('member.refuge');
    }

    public function show()
    {
        //判斷有無登入
        if(Auth::user()==null){
            return view('auth.login');
        }

        $users = Auth::user()->id;
        $members = members::where('user_id',$users)->get();
        $data = ['members' => $members];
        return view('member',$data);
    }

    public function edit(members $members)
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
    public function update(Request $request)
    {
        $date=$request->input('date');
        $number=$request->input('number');
        $phone=$request->input('phone');

        $users = Auth::user()->id;
        $members = members::where('user_id',auth()->user()->id)->get();
        $members ->date = $date;
        $members ->number = $number;
        $members ->phone = $phone;
//        $members ->update($members);
        $members ->save();
        $data = ['members' => $members];
        return view('member',$data);
    }

    public function destroy(members $members)
    {
        //
    }
}
