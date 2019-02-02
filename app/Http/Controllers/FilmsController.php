<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmsController extends Controller
{
    //
    public function index(){
        return view('films.index');
    }

    public function show(){
        return view('films.show');
    }
}
