<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Utilizza Eloquent per recuperare tutti i film
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
}