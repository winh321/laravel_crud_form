<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function store(Request $request){
        $title = $request->input("title");
        $desc = $request->desc;
        return "<h1>Title : $title</h1> <p> $desc</p> ";
    }
}
