<?php

namespace App\Http\Controllers;

use session;

use Illuminate\Http\Request;
use App\Models\Addsubject;
use Illuminate\Support\Facades\DB;


class AddSubjectController extends Controller
{
    //
    function add(Request $req)
    {
       $add=new Addsubject;
       $add->subcode=$req->subcode;
       $add->subname=$req->subname;
       $add->tno=session()->get('no');
       $add->save();
       return redirect('subject')->with("msg","Data Inserted Successfully");
    }
    function show(Request $req)
    {
        $data=Addsubject::all();
        return view('view_subject',['addsubjects'=>$data]);
    }
    function remove($subcode)
    {
      $query=DB::delete("delete from addsubjects where subcode='$subcode'");
      //$data=Addquestions::find($qno);
      //$data->delete();
      return redirect('view_sub');
   }
}
