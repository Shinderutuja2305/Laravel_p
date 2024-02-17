<?php

namespace App\Http\Controllers;

use session;
use Illuminate\Http\Request;
use App\Models\Addteacher;
use Illuminate\Support\Facades\DB;

class AddTeacherController extends Controller
{
    //
    function addData(Request $req)
    {
       $add=new addteacher;
       $add->tno=$req->tno;
       $add->fullname=$req->fullname;
       $add->username=$req->username;
       $add->password=$req->password;
       $add->contact=$req->contact;
       $add->save();
       return redirect('add_teach');
    }
    function show()
    {
        $data=Addteacher::all();
        return view('delete_teacher',['addteachers'=>$data]);
    }

   function remove($tno){
      $query=DB::delete("delete from addteachers where tno='$tno'");
      //$data=Addteacher::find($tno);
      //$data->delete();
      return redirect('list');
   }
   function login(Request $req){
      $user=Addteacher::where('username',$req->input('username') )->get();
      if($user[0]->password==$req->input('password'))
      {
         $req->session()->put('user',$user[0]->fullname);
         $req->session()->put('no',$user[0]->tno);
         return redirect('display_t');
      }
      else
      {
         return redirect('teacher_error');
      }

   }
   function logout(Request $req){
      $r=$req->session()->flush();
      return redirect('/');
   }
}
