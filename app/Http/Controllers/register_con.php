<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class register_con extends Controller
{
    function display(Request $dis)
    {
    
        $dis->validate([
            'Firstname' => 'required | max:255 | alpha', 
            'Lastname' => 'required | max:255 | alpha',
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
        //  return $dis->input();
            DB::table('employees')->insert([
                "Firstname"=>$dis->input('Firstname'),
                "Lastname"=>$dis->input('Lastname'),
                "gender"=>$dis->input('gender'),
                "date"=>$dis->input('date'),
                "age"=>$dis->input('age'),
                "salary"=>$dis->input('salary'),
                "department"=>$dis->input('department'),
                "email"=>$dis->input('email'),
                "checkbox"=>$dis->input('checkbox'),
            ]);
        return redirect('dashboard');
    }
}
