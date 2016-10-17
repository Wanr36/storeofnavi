<?php
    namespace Storeofnavi\Http\Controllers;

    use Illuminate\Http\Request;

    use Storeofnavi\Http\Requests;

    class QuestionPageController extends Controller
    {
        function Index(){
            return view('question');
        }
    }