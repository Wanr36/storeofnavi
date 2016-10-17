<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;
use Storeofnavi\Disciplines;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
class AdminDisciplinesController extends Controller{
    public function Index(Request $request){
        $email = $request->session()->get('email');
        $role = $request->session()->get('role');
        if(empty($email) or $role != 1){
            return redirect("adminzone/login");
        }else{
            //условие на вход администратора
            $courses = Disciplines::all();
            return view('admin.course',['courses'=>$courses]);
        }

    }
    public function store(Request $request){
        //Disciplines::create($request->all());
        //return Response::json("ok");
        $disciplines_model = new Disciplines();
        $disciplines_model->nameDisciplines = $request->input('nameDisciplines');
        $disciplines_model->actionDisciplines = $request->input('actionDisciplines');
        $disciplines_model->shortDiscipline = $request->input('shortDiscipline');
        $disciplines_model->discription = $request->input('discription');
        $disciplines_model->discriptionForImg = $request->input('discriptionForImg');

        $dir = '/uploads/disciplines/'.$request->input('actionDisciplines');
        $filename="img.jpg";
        $request->file('img')->move(public_path().$dir, $filename);
        $disciplines_model->img = $dir."/".$filename;

        $disciplines_model->save();
        return response()->json(['msg'=>'Операция прошла успешно','srcImg'=>$dir."/".$filename], 200);//Response::json($request::all());
    }
    public function select_course(Request $request){
        $href = $request->pole;
        $disciplines = Disciplines::where("actionDisciplines","=",$href)->first();
        $id_disciplines = $disciplines->id;
        $application = DB::table("application")->where("discipline_id","=",$id_disciplines)->get();
        $disciplines = Disciplines::where("actionDisciplines","=",$href)->get();
        return response()->json(['disciplines'=>$disciplines, 'application'=>$application], 200);
    }
}
