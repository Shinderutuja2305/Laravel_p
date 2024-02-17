<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Addquestion;
use App\Models\Addstudent;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    //
    function display(Request $req)
    {
        $data=Result::join('addstudents','results.rollno','=','addstudents.rollno')->get(['results.*','addstudents.fullname']);
       // return $data;
        return view('view_stud_result',['results'=>$data]);
    }
    function check(Request $req)
    {
        //$data=DB::select("select * from results where subcode='$req->subcode'");
        $data=Result::where('subcode',$req->subcode)->get();
        //return $data;
      return view('view_result',['results'=>$data]);
    }
     function showans(Request $req){
     //return $req;
        $sum=0;
      $a=session()->get('no');
      //print_r($a);
     // echo($req);
      $i=$req->qno;
      $ans1=$req->answer1;
      //echo($ans1);
      $ans2=$req->answer2;
      $ans3=$req->answer3;
      $ans4=$req->answer4;
      $ans5=$req->answer5;
      $ans6=$req->answer6;
      $ans7=$req->answer7;
      $ans8=$req->answer8;
      $ans9=$req->answer9;
      $ans10=$req->answer10;
      $ans11=$req->answer11;
      $ans12=$req->answer12;
      $ans13=$req->answer13;
      $ans14=$req->answer14;
      $ans15=$req->answer15;

      //$user=DB::select("select answer from addquestions where qno=$req->qno");
      $user=Addquestion::all();
      if($ans1==$user[0]->answer){
        $sum=1;
      }
      if($ans2==$user[1]->answer){
        $sum++;
      }
      if($ans3==$user[2]->answer){
        $sum++;
      }
      if($ans4==$user[3]->answer){
        $sum++;
      }
      if($ans5==$user[4]->answer){
        $sum++;
      }
      if($ans6==$user[5]->answer){
        $sum++;
      }
      if($ans7==$user[6]->answer){
        $sum++;
      }
      if($ans8==$user[7]->answer){
        $sum++;
      }
      if($ans9==$user[8]->answer){
        $sum++;
      }
      if($ans10==$user[9]->answer){
        $sum++;
      }
      if($ans11==$user[10]->answer){
        $sum++;
      }
      if($ans12==$user[11]->answer){
        $sum++;
      }
      if($ans13==$user[12]->answer){
        $sum++;
      }
      if($ans14==$user[13]->answer){
        $sum++;
      }
      if($ans15==$user[14]->answer){
        $sum++;
      }

      //print($sum);
      $subid=$req->subcode;
      //echo($subid);
      //return $req;
      $add=new Result;
      $add->rollno=$a;
      $add->subcode=$subid;
      $add->marks=$sum;
      $add->save();
      return redirect('show_quiz_res');
      }
      function show(Request $req){
      $a=session()->get('no');
      $data=DB::select("select * from results where rollno=$a");
      return view('view_res_stud',compact('data'));      
  }
}