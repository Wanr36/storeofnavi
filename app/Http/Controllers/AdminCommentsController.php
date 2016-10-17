<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storeofnavi\Http\Requests;

class AdminCommentsController extends Controller
{
    public function Index(Request $request){
        $email = $request->session()->get('email');
        $role = $request->session()->get('role');
        if(empty($email) or $role != 1){
            return redirect("adminzone/login");
        }else{
            $comments = DB::table("comments")->orderBy('id', 'desc')->paginate(25);
            return view('admin.comments', ['comments' => $comments]);
        }

    }
}
