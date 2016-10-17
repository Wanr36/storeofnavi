<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storeofnavi\Http\Requests;

class FaqPageController extends Controller
{
	function Index(){
		$feedbacks = DB::table('reviews')->orderBy('id', 'desc')->take(4)->get();
		return view('faq',['feedbacks'=>$feedbacks]);
	}
}
