<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;
use Storeofnavi\MyProfileModel;
use Storeofnavi\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Pagination;

class AdminUsersController extends Controller
{
    public function Index(Request $request){
        $email = $request->session()->get('email');
        $role = $request->session()->get('role');
        if(empty($email) or $role != 1){
            return redirect("adminzone/login");
        }else{
            //условие на вход администратора
            $users = DB::table("users")->orderBy('id', 'desc')->paginate(45);//MyProfileModel();
            return view("admin.users",['users' => $users]);
        }


    }
}
