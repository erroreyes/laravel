<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_con extends Controller
{
    function login_check(Request $print){
        
        $print->validate(['username'=>'required','password'=>'required']);
        $value=$print->input();
        $print->session()->put('user',$value['username']);
        return redirect('profile');
    }
}
