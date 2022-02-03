<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req){
       $user = User::where(['email'=>$req->login_email])->first();
       if(!$user || !Hash::check($req->login_password,$user->password)){
        return 'username Or Password is not matched';
       }else{
           $req->session()->put('user',$user);
           return redirect('/');
       }
    }
}
