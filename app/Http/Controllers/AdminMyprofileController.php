<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;

use Storeofnavi\Http\Requests;

class AdminMyprofileController extends Controller
{
    public function Index(Request $request){
        $email = $request->session()->get('email');
        $role = $request->session()->get('role');
        if(empty($email) or $role != 1){
            return redirect("adminzone/login");
        }else{

            return view('admin.myprofile');
        }
    }
}
