<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storeofnavi\Http\Requests;
use Storeofnavi\Question;
class AdminQuestionController extends Controller
{
    public function Index(Request $request){
        $email = $request->session()->get('email');
        $role = $request->session()->get('role');
        if(empty($email) or $role != 1){
            return redirect("adminzone/login");
        }else{
            $questionAnswer = DB::table("questionAnswer")->orderBy('id', 'desc')->paginate(25);
            return view('admin.question', ['questionAnswers' => $questionAnswer]);
        }
    }
    public function destroy($id){
        $Question =Question::where('id','=',$id);
        $Question->delete();
        return response()->json(['msg'=>'GOOD'], 200);
    }
    public function getQuestion(Request $request){
        $id = $request->id;
        $Question = Question::where('id','=',$id)->first();
        return response()->json(['question'=>$Question], 200);
    }
}
