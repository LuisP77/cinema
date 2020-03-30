<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class FrontController extends Controller
{
    function index () {
        return view('index');
    }

    function contact () {
        return view('contact');
    }

    function reviews () {
        $movies = Movie::getMovies();
        return view('reviews', compact('movies'));
    }

    function admin () {
        return view('admin.index');
    }

}
