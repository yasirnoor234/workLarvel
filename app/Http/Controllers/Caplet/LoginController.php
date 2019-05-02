<?php

namespace App\Http\Controllers\Caplet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use Validator;

class LoginController extends Controller
{
    public function index(){
        return view('caplet.login');
    }
    public function store(){
        $data= Input::except(array('token'));
        $rule = array(
            'username' => 'required',
            'password' => 'required|min:6',
        );

    $validator = Validator::make($data,$rule);

    if($validator->fail()){
        return Redirect::to('caplet/login')->withErrors($validator);
    }else{
        echo "No, Fail";
    }
    }
}
