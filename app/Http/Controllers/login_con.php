<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_con extends Controller
{
    function login_check(Request $print){
        
        $print->validate(['username'=>'required','password'=>'required']);
        $value=$print->input();
        if ($value['username']==="i_admin" && $value['password']==="1234") {
            $print->session()->put('admin',"i_admin");
            return redirect('dashboard');
        }
        else {
            $print->session()->put('user',$value['username']);
            return redirect('menu');
        }
      
    }
}
