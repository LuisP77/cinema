<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\User;*/
use App\Http\Requests\GenreCreateRequest;
use App\Genre;
use Session;

class GenreController extends Controller
{
    /*
     * Listar generos
     */
     public function listing() {
        $generos = Genre::all();
        return response()->json([
            $generos->toArray(),
        ]);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('genero.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreCreateRequest $request)
    {
        if ($request->ajax()) {
          Genre::create($request->all());
          return response()->json([
              'mensaje' => 'Género creado',
          ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::find($id);
        return response()->json(
          $genre->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenreCreateRequest $request, $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->fill($request->all());
        $genre->save();
        Session::flash('message','Usuario editado exitosamente.');
        return response()->json([
          "message" => "ok"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        Session::flash('message','Usuario eliminado exitosamente.');
        return response()->json([
          "message" => "ok"
        ]);
    }
}
