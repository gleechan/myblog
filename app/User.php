<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;

class User extends Model
{
    protected $table = 'users';
    public function login(){
        $username = Request::get('username');
        $user = $this->where('username', $username)->exists();

        return dd($this);
    }
}
