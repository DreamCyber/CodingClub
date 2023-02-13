<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControll extends Controller
{
    public function showView(){
        return view('home/homepage');
    }
}
