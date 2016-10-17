<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;

use Storeofnavi\Http\Requests;

class ApplicationPageController extends Controller
{
	function Index(){
		return view('application');
	}
}
