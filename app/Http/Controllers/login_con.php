<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_con extends Controller
{
    function declare(Request $print){
        
        $print->validate(['username'=>'required','password'=>'required']);
        return $print->input();
        
    }
}
