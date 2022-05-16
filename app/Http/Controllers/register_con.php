<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register_con extends Controller
{
    function display(Request $dis)
    {
    
        $dis->validate([
            'Firstname' => 'required | max:255', 
            'Lastname' => 'required | max:255 ',
            'gender'=>'required',
            'date'=>'required',
            'age'=>'required | numeric',
            'salary'=>'required | numeric',
            'department'=>'required',
            // 'Imagefile'=>'required',
            'email'=>'required | email',
            'passcode' => 'required | min:8 | max:12',
            'confirm'=>'required | same:passcode',
            'checkbox'=>'required'
            ]);
         return $dis->input();
    }
}
