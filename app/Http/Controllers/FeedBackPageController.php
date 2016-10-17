<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;

use Storeofnavi\Http\Requests;

class FeedBackPageController extends Controller
{
    public function Index(){
        return view('feedback');
    }
}
