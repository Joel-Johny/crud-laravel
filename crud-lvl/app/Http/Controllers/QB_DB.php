<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QB_DB extends Controller
{
    public function selectMe(){
        $result=DB::table('user_details')->get();
        echo "<pre></pre>";
        print_r($result);
    }

    public function createMe(){
        DB::table('user_details')->insert([
            "id"=>"1",
            "email"=>"jj@email.com",
            "username"=>"jj088",
            "password"=>"12456"
        ]);

    }

    public function updateMe(){
        DB::table('user_details')->where("id",1)->update([
            "id"=>"5",
            "email"=>"jj11@email.com",
            "username"=>"j1j088",
            "password"=>"112456"
        ]);

    }
        public function deleteMe(){
            DB::table('user_details')->where("id",5)->delete();

        }
    
}
