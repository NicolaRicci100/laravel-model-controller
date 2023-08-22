<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Restituisco la lista dei film
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('movie', compact('movies'));
    }
}
