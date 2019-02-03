<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        $films = Film::latest()->get();

        return view('films.index', compact('films'));
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    public function create(){
        return view('films.create');
    }

    public function store(){

        $this->validate(request(), [
            'film_name' => 'required',
            'film_description'  => 'required',
            'release_date'  => 'required',
            'rating'  => 'required',
            'ticket_price'  => 'required',
            'country'  => 'required'
        ]);

        auth()->user()->publish(
            new Film(request(['film_name', 'film_description', 'release_date', 'rating', 'ticket_price','country']))
        );

        // Film::create([//request([
        //     // 'user_id', 'film_name', 'film_description', 'release_date', 'rating', 'ticket_price','country'
        //     'user_id' => auth()->id(),
        //     'film_name' => request('film_name'),
        //     'film_description' => request('film_description'),
        //     'release_date' => request('release_date'),
        //     'rating' => request('rating'),
        //     'ticket_price' => request('ticket_price'),
        //     'country' => request('country')
        //     //])
        // ]);
        // dd(request()->all());
        return redirect('/');
    }
}
