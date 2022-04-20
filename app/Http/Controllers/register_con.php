<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register_con extends Controller
{
    function display(Request $dis)
    {
        $dis->validate([
            'fname' => 'required', 
            'lname' => 'required',
            'pass' => 'required | min:8 | max:12',
            'date'=>'required',
            'age'=>'required',
            'salary'=>'required',
            'dept'=>'required',
            'file' =>'required',
            'email'=>'required',
            'cpass'=>'required'
            ]);
        return $dis->input('fname', 'lname', 'pass');
    }
}
