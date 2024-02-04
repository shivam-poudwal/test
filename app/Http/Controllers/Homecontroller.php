<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function submit(Request $request){
        dd($request->all());
    }
}
