<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','password', 'last_name','phone_number','location', 'verified', 'register_number','country'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function order(){
        return $this->hasOne('App\Relation','user_id','id');
    }

    public function contract(){
        return $this->hasOne('App\Contract','user_id','id');
    }


}
