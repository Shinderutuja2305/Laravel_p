<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addstudent;
use App\Models\Addsubject;
use App\Models\Result;
use Illuminate\Support\Facades\DB;

class DisplayResultController extends Controller
{
    //
    function showresult(Request $req)
    { 
        $a=session()->get('no');
        //print_r($a);
        $data=DB::select("select * from addstudents,addsubjects,results where addstudents.rollno='$a'");
        //return $data;
        return view('print_result',compact('data'));
     // return view('view_result',['results'=>$data]);
    }
}
