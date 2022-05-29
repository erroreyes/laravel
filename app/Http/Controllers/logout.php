<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    function logout_check(){
        if(session()->has('user')){
            session()->pull('user');
           
            return redirect('login');  
        }
        if(session()->has('admin')){
            session()->pull('admin');
            return redirect('login');  
        }
        return redirect('login');  
    }
}
