<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;

use Storeofnavi\Http\Requests;

class DisciplinesPageController extends Controller
{
	function Index(){
		return view('disciplines');
	}
}
