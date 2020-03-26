<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index () {
        return view('index');
    }

    function contact () {
        return view('contact');
    }

    function reviews () {
        return view('reviews');
    }

    function admin () {
        return view('admin.index');
    }

}
