<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formsubmit extends Controller
{
    //
    
    public function index(Request $request){
        return $request->post();
    }
}
