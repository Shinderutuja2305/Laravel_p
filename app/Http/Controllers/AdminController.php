<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    function login(Request $req){
        $admin=new Admin;
        if(($req->username=='admin') && ($req->password=='admin123'))
        {
            return redirect('display');
        }
        else{
            return redirect('adminerror');
        }
    }
}
