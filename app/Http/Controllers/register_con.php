<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register_con extends Controller
{
    function display(Request $dis)
    {
    
        // $dis->validate([
        //     'Firstname' => 'required | max:255 | regex:/[a-zA-Z]/', 
        //     'Lastname' => 'required | max:255 | alpha',
        //     'passcode' => 'required | min:8 | max:12',
        //     'confirm'=>'required | same:password',
        //     'date'=>'required',
        //     'gender'=>'required',
        //     'age'=>'required | regex:/[0-9]/',
        //     'salary'=>'required | numeric',
        //     'Department'=>'required',
        //     // 'Imagefile' =>'required | image',
        //     'email'=>'required | email',
        //     'checkbox'=>'required'
        //     ]);
         return $dis->input();
    }
}
