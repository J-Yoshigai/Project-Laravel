<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('hello.index');
    }
    public function morning(){
        return view('hello.morning');
    }
}
