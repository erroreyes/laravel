<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upload_file extends Controller
{
    function imagefile(Request $file)
    {
        $foldername = $file->input('folder_name');
        $filename = $file->file('imagefile')->getClientOriginalName();
       if (isset($foldername)) {
          if ($file->input('file_name')=="random") {
             $upload= $file->file('imagefile')->store($foldername);
          }
          else{
             $upload= $file->file('imagefile')->storeAs($foldername,$filename);
          }
       }
       else {
         if ($file->input('file_name')=="random") {
            $upload= $file->file('imagefile')->store('images');
         }
         else{
            $upload= $file->file('imagefile')->storeAs('images',$filename);
         }
       }
       if($upload){
          return redirect('uploadfile');
       }
    }
}
