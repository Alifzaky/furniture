<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contackController extends Controller
{
    public function contack(){
        return view('main.contact');
    }
}
