<?php

namespace App\Http\Controllers;
use Crypt;


use Illuminate\Http\Request;
use App\Models\Addstudent;
use Illuminate\Support\Facades\DB;

class AddStudentController extends Controller
{
    //
    function register(Request $req){
       $add=new Addstudent;
       $add->rollno=$req->rollno;
       $add->fullname=$req->fullname;
       $add->username=$req->username;
       $add->password=Crypt::encrypt($req->password);
       $add->email=$req->email;
       $add->birthdate=$req->birthdate;
       $add->contact=$req->contact;
       $add->save();
       return redirect('login_s')->with("msg","Data Inserted Successfully");
    }
     function login(Request $req){
      $user=Addstudent::where('username',$req->input('username') )->get();
      if(Crypt::decrypt($user[0]->password)==$req->input('password'))
      {
         $req->session()->put('no',$user[0]->rollno);
         $req->session()->put('user',$user[0]->fullname);
         return redirect('display_s');
      }
      else
      {
         return redirect('student_error');
      }

   }
   function logout(Request $req){
      $r=$req->session()->flush();
      return redirect('/');
   }
   function show(Request $req)
    {
        $data=Addstudent::all();
        return view('view_student',['addstudents'=>$data]);
    }
    function remove($rollno)
    {
      $query=DB::delete("delete from addstudents where rollno='$rollno'");
      //$data=Addquestions::find($qno);
      //$data->delete();
      return redirect('delete_stud');
   }
   
}
