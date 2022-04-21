<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index() {
        // $movies_arr = [
        //     'Il padrino',
        //     'Via col vento',
        //     'Titanic',
        // ];
        $movies = Movie::all();
        // return view('home', compact('movies'));
        return view('home', compact('movies'));
    }
}
