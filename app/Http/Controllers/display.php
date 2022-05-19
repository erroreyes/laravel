<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as facadeDB;

class display extends Controller
{
    function tbl(){
        $detail=facadeDB::select("select * from emp");
        return view("apidata",["details"=>$detail]);
        return admin::all();
    }
}
