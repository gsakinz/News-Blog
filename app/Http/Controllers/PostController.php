<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        return view('posts.post');
    }
    public function addPost(Request $request)
    {
        return $request->input('postname');
    }
}
