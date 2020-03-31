<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Town;

class TestController extends Controller
{
    function index() {
        $states = State::pluck('name','id');
        $towns = Town::pluck('name','id');
        return view('test.test', compact(['states', 'towns']));
    }

    function getTowns(Request $request) {
        $id = $request->id;
        $towns = Town::getTowns($id);
        return response()->json([
            'towns' => $towns,
        ]);
    }
}
