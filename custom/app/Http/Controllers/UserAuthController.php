<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return  view("auth.registration");
    }
    public function registerUser(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:5|max:12'
        ]);
        $user = new _user(); 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $req= $user->save();
        if($req){
            return back()->with('sucess', 'you have registered sucessfully');
        }
        else{
            return back()->with('fail', 'Something Wrong');
        }
    }
}
