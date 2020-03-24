<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index () {
        return 'Hola desde TestController - index';
    }
}
