<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function returnView(){
        return view('welcome')->with('name', 'Victoria');
    }
    function register(Request $request){

        if (($request)->isMethod('post'))
        {
             dd($request->all());
        }
    }
}
