<?php

namespace App\Http\Controllers\Caplet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('caplet.register');
    }
    public function dashboard(){
        return view('caplet.home');
    }
    
}
