<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use App\UserController;
use App\VerifyUser;

class User extends Authenticatable
{
    protected $guarded = array();

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //protected $table = 'users';

    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
protected $hidden = array('password', 'remember_token');

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function role() {
        return $this->role;
    }

}

