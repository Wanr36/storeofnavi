<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;
use Storeofnavi\MyProfileModel;
use Storeofnavi\Http\Requests;

class MyprofilePageController extends Controller
{
	function Index(){
		$MyProfileUser = MyProfileModel::all();
		return view('myprofile', ['myProfile'=>$MyProfileUser]);
	}
}
