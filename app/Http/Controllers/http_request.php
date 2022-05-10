<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class http_request extends Controller
{
   function check(){
       $check_data=Http::get('https://reqres.in/api/users?page=1');
       return view("apidata",["data"=>$check_data['data']]);
   }
}
