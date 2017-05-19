<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDashboard(){
    return view('dashboard');
    }
    
        public function SignUp( Request $request)
    {
   
    $email = $request['email'];
    $first_name = $request['first_name'];
    $password = $request['password'];

    $user = new User();
    $user -> email = $email;
    $user -> name = $first_name;
    $user -> password = $password;

    $user -> save();


    return redirect() -> route('dashboard');
        }
    
    public function SignIn (Request $request){

    if (Auth::attempt(['email' => $request['email'],'password' => $request['password']])){

    return redirect() -> route('dashboard');
    }
    return redirect() -> route('login');
    }

    }
