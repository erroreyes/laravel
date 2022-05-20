<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as facadeDB;

class display extends Controller
{
    function tbl(){
        // $detail=facadeDB::select("select * from emp");;
        $detail=employee::all();
        return view("dashboard",["dis"=>$detail]);
        // return admin::all();
    }
}
