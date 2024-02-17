<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addquestion;
use Illuminate\Support\Facades\DB;

class AddQuestionController extends Controller
{
    //
     function add(Request $req)
    {
       $add=new Addquestion;
       $add->subcode=$req->subcode;
       $add->question=$req->question;
       $add->option1=$req->option1;
       $add->option2=$req->option2;
       $add->option3=$req->option3;
       $add->option4=$req->option4;
       $add->answer=$req->answer;
       $add->tno=session()->get('no');
       $add->save();
       return redirect('add_qs')->with("msg","Data Inserted Successfully");
    }
    function show(Request $req)
    {
        $data=Addquestion::all();
        return view('view_question',['addquestions'=>$data]);
    }
    function remove($qno)
    {
      $query=DB::delete("delete from addquestions where qno='$qno'");
      //$data=Addquestions::find($qno);
      //$data->delete();
      return redirect('viewqs');
   }
   //function check(Request $req){
   // $user=Addquestion::where('subcode',$req->input('subcode') )->get();
     // if($user[0]->subcode==$req->input('subcode'))
      //{
        // return redirect('viewqs');
      //}
      //else{
        //echo "Subject code entered incorrect...";
      //}
   //}
   function showData($qno){
    $data=DB::select("select * from addquestions where qno='$qno'");
    // return $data;
    //$data=Addquestion::find($qno);
    return view('update',compact('data'));
    }
   function updateqs(Request $req){
   // return $req->input();
    //$data=Addquestion::find($req->qno);
    //return $data;
   // $data=DB::select("select * from addquestions where qno=$req->qno");
    //$data[0]->question=$req->question;
   // $data[0]->option1=$req->option1;
   // $data[0]->option2=$req->option2;
   // $data[0]->option3=$req->option3;
   // $data[0]->option4=$req->option4;
   // $data[0]->answer=$req->answer;
    $query=DB::update("update addquestions set question='$req->question',option1='$req->option1',option2='$req->option2',option3='$req->option3',option4='$req->option4',answer='$req->answer' where qno=$req->qno");
    return redirect('viewqs');
   }
   function display(Request $req)
    {
        $data=Addquestion::all();
        return view('start_quiz',['addquestions'=>$data]);
    }
   
}
