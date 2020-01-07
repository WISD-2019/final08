<?php

namespace App\Http\Controllers;

use App\post;
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
}
