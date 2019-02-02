<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmsController extends Controller
{
    //
    public function index(){
        return view('films.index');
    }

    public function show(){
        return view('films.show');
    }

    public function create(){
        return view('films.create');
    }

    public function store(){
        Film::create(request([
            'film_name', 'film_description', 'release_date', 'rating', 'ticket_price','country'
            // 'film_name' = request('film_name'),
            // 'film_description' = request('film_description'),
            // 'release_date' = request('release_date'),
            // 'rating' = request('rating'),
            // 'ticket_price' = request('ticket_price'),
            // 'country' = request('country')
            ])
        );
        // dd(request()->all());
        return redirect('/');
    }
}
