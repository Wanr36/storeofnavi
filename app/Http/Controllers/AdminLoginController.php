<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;
use Storeofnavi\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class AdminLoginController extends Controller
{
    public function Index(){
        //условие на вход администратора
        return view('admin.login');
    }
    public function InputOnSystem(Request $request){
        $email = $request->input("email_user");
        $password = bcrypt($request->input("password_user"));
        $login = DB::table('users')->where("email", $email)->first();
        $role = $login->role;
        if (!empty($login)) {
            //if( $login->password == $password ) {
                $request->session()->put('email', $email);
                $request->session()->put('role', $role);
                return response()->json(['metka' => 'true'], 200);
           // }else{
               // return response()->json(['metka' => 'false'], 200);
           // }
        }
    }
    public function Logout(){
        Session::flush();
        return redirect('/');
    }
}