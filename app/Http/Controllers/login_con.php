<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_con extends Controller
{
    function print(Request $show){
        return $show->input();
    }
}
