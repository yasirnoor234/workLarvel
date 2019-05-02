<?php

namespace App\Model\caplet;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    protected $table = "register_users";

    public static function formstore($data){

        $email = Input::get('email');
        $username = Input::get('username');
        $fullname = Input::get('fullname');
        $lastname = Input::get('lastname');
        $password = Hash::make(Input::get('password'));

        $users = new Register();

        $users->username = $username;
        $users->email = $email;
        $users->fullname = $fullname;
        $users->lastname = $lastname;
        $users->password = $password;

        $users->save();
    }
}
