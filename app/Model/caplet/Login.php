<?php

namespace App\Model\caplet;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    protected $table = "register_login";

    public static function forminfo($data){

        $email = Input::get('email');
        $password = Hash::make(Input::get('password'));

        $users = new Login();

        $users->email = $email;
        $users->password = $password;

        $users->save();
    }
}
