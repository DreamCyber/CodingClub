<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DftControll extends Controller
{
    public function showView(){
        return view('form/daftar');
    }
}
