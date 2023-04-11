<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all();

        // dd($movies);

        $data = [
            'movies' => $movies
        ];

        return view('homepage', $data);
    }
}
