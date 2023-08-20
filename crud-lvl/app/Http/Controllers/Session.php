<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Session extends Controller
{
    //
    public function index(){
        echo "inside index function";

    }
    public function setMe(Request $r){
        echo "inside setMe function";
        $r->session()->put("name","Joel");
    }

    public function getMe(Request $r){
        echo "inside getMe function";
        echo $r->session()->get("name");
    }

    public function forgetMe(Request $r){
        echo "inside forgetMe function";
        echo $r->session()->forget("name");
    }
}
