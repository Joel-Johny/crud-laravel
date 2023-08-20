<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page1 extends Controller
{
    //
    
    public function index(){
        echo "inside index fn";
        return view('page1');    
    }
}
