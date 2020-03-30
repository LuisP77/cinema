<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['name', 'direction', 'duration', 'genre_id', 'poster'];

    public function setPosterAttribute($poster){
        if (!empty($poster)) {
          $movie_filename = rand(10000,99999) . '-' . $poster->getClientOriginalName();
          $this->attributes['poster'] = $movie_filename;
          \Storage::disk('local')->put($movie_filename, \File::get($poster));
        }
    }

    public static function getMovies(){
      $movies = DB::table('movies')
              ->join('genres', 'movies.genre_id', '=', 'genres.id')
              ->select('movies.*', 'genres.genre')
              ->get();
      return $movies;
    }

}
