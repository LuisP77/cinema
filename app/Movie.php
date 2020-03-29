<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['name', 'direction', 'duration', 'genre_id', 'poster'];
    public function setPosterAttribute($poster){
        $movie_filename = rand(10000,99999) . '-' . $poster->getClientOriginalName();
        $this->attributes['poster'] = $movie_filename;
        \Storage::disk('local')->put($movie_filename, \File::get($poster));
    }
}
