<?php

namespace App\Http\Controllers;

use App\post;
use App\shelter;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('createpost');
    }

    public function store(Request $request)
    {
        $title=$request->input('title');
        $context=$request->input('context');

        post::create([
            'shelter_id' =>'1',
            'title' => $title,
            'context' => $context,
        ]);
        return redirect()->route('member.refuge');
    }

    public function show()
    {
        $posts = post::all();
        $shelters = shelter::all();
        $data = ['posts'=>$posts,'shelters' => $shelters];
        return view('post',$data);
    }
}
