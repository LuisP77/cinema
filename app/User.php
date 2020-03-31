<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Storage;
use File;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'foto'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected $dates = ['delete_at'];

    /*
     * Set Password Attribute
     */
    function setPasswordAttribute($valor){
        if ( !empty($valor) ) {
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    public function setFotoAttribute($foto){
        if (!empty($foto)) {
          $foto_filename = rand(10000,99999) . '-' . $foto->getClientOriginalName();
          $this->attributes['foto'] = $foto_filename;
          Storage::disk('local')->put('app-users/'.$foto_filename, File::get($foto));
        }
    }

}
