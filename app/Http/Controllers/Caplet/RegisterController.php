<?php

namespace App\Http\Controllers\Caplet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\caplet\Register;
use Input;
use Validator;
use Redirect;
use Auth;
use Session;
class RegisterController extends Controller
{
    public function index(){
        return view('caplet.register');
    }
    public function store(){
        $data= Input::except(array('token'));
        $rule = array(
            'email' => 'required|email',
            'username' => 'required',
            'fullname' => 'required',
            'lastname' => 'required',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password',
        );

    $message = array(
        'cpassword.required' => 'The confirm password is required',
        'cpassword.min' => 'The confirm password must be at least 6',
        'cpassword.same' => 'The confirm password and password must same',
    );

    $validator = Validator::make($data,$rule,$message);

    if($validator->fails()){
        return Redirect::to('caplet/register')->withErrors($validator);
    }else{
        Register::formstore(Input::except(array('_token'.'cpassword')));
        Session::flash('success', 'Register successfully added!');
        return redirect()->back();
   //     return Redirect::to('caplet/register')->with('success','successfully registered');
    }
    }
    public function login(){
        $data = Input::except(array('token'));

        $rule = array(
            'email' => 'required|email',
            'password' => 'required|min:8',
        );

        $validator = Validator::make($data,$rule);

        if($validator->fails()){
            return Redirect::to('caplet/login')->withErrors($validator);
        }else{
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password'),
            );
        // Login::forminfo(Input::except(array('_token'.'cpassword')));
        //  return Redirect::to('caplet/home')->with('success','successfully login');
                // $data = Input::except(array('token'));

                if(Auth::attempt($userdata)){
                    Session::flash('success', 'Register successfully added!');
                    return Redirect::to('caplet/home');
                    //  echo "yes match";
                }else{
                    return Redirect::to('caplet/register');
                    // echo "no match";
                }
        
        }

    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('caplet/login');
    }
}
