<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;

class MODEL_DB extends Controller
{
    public function selectMe(){
        return UserModel::where("id",82)->get();
    }

    public function deleteMe(){
         UserModel::where("id",82)->delete();
    }

    public function createMe(){
        $newUser=new UserModel;
        $newUser->username="James";
        $newUser->email="James@saml.co";
        $newUser->password="12456";
        $newUser->save();

   }
   public function updateMe(){
    $updateUser=UserModel::where("id",90);
    $updateUser->update(["email"=>"james@gmail.com"]);
}
    // public function createMe(){
    //     DB::table('user_details')->insert([
    //         "id"=>"1",
    //         "email"=>"jj@email.com",
    //         "username"=>"jj088",
    //         "password"=>"12456"
    //     ]);

    // }

    // public function updateMe(){
    //     DB::table('user_details')->where("id",1)->update([
    //         "id"=>"5",
    //         "email"=>"jj11@email.com",
    //         "username"=>"j1j088",
    //         "password"=>"112456"
    //     ]);

    // }
    //     public function deleteMe(){
    //         DB::table('user_details')->where("id",5)->delete();

    //     }
    
}
