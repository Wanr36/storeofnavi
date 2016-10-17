<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;

use Storeofnavi\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Pagination;

class AdminReviewsController extends Controller
{
    public function Index(Request $request){
        $email = $request->session()->get('email');
        $role = $request->session()->get('role');
        if(empty($email) or $role != 1){
            return redirect("adminzone/login");
        }else{
            //условие на вход администратора
            $reviews = DB::table("reviews")->orderBy('id', 'desc')->paginate(10);
            return view("admin.reviews", ['reviews' => $reviews]);
        }
    }
}
