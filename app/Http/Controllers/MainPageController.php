<?php
	namespace Storeofnavi\Http\Controllers;
	use Storeofnavi\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	class MainPageController extends Controller{
		function Index(){
			$feedbacks = DB::table('reviews')->orderBy('id', 'desc')->take(4)->get();
			return view('main',['feedbacks'=>$feedbacks]);
		}
	}

?>