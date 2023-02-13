<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampelControll extends Controller
{
    public function index (){
        return "Hallo From Laravel";
    }

    public function showView (){
        return view('sample');
    }
}
