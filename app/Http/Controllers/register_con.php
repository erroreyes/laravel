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
         'gender' => 'required',
         'date' => 'required',
         'age' => 'required | numeric',
         'imagefile' => 'required',
         'email' => 'required | email',
         'passcode' => 'required | min:8 | max:12',
         'confirm' => 'required | same:passcode',
         'checkbox'=>'required'
      ]);
      $foldername = $dis->input('folder_name');
      $filename = $dis->file('imagefile')->getClientOriginalName();
      // $upload = $dis->file('imagefile')->storeAs('images', $filename);         //store image

      if (isset($foldername)) {
         if ($dis->input('file_name') == "random") {
            $upload = $dis->file('imagefile')->store($foldername,'upload');
         } else {
            $upload = $dis->file('imagefile')->storeAs($foldername, $filename,'upload');
         }
      } else {
         if ($dis->input('file_name') == "random") {
            $upload = $dis->file('imagefile')->store('images','upload');
         } else {
            $upload = $dis->file('imagefile')->storeAs('images', $filename,'upload');
         }
      }
      //  return $dis->input();
      DB::table('employees')->insert([
         "Firstname" => $dis->input('Firstname'),
         "Lastname" => $dis->input('Lastname'),
         "gender" => $dis->input('gender'),
         "date" => $dis->input('date'),
         "age" => $dis->input('age'),
         'Imagefile' => $upload,
         "email" => $dis->input('email'),
         "checkbox" => $dis->input('checkbox'),
      ]);
      return redirect('login');
   }
}
