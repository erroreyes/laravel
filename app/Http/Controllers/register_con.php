<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register_con extends Controller
{
    function display(Request $dis)
    {
        $dis->validate([
            'Firstname' => 'required | max:255', 
            'Lastname' => 'required | max:255',
            'password' => 'required | min:8 | max:12 | confirmed',
            'date'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'salary'=>'required',
            'department'=>'required',
            'Imagefile' =>'required | image',
            'email'=>'required | email | unique:users',
            'checkbox'=>'required_all_'
            ]);
        return $dis->input();
    }
}
