<?php

namespace Storeofnavi\Http\Controllers\Auth;

use Storeofnavi\User;
use Validator;
use Storeofnavi\ConfirmUsers;
use Mail;
use Storeofnavi\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Request;


class RegistrationController extends Controller{
    public function Index(Request $request){
        $this->validator($request);
        return $this->create($request);

    }
    public function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    public function create(array $data){

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if(!empty($user->id)){
            $email=$user->email;  //��� email, ������� ���� ������������
            $token=str_random(32); //��� ���� ��������� ������
            $model=new ConfirmUsers; //������� ��������� ����� ������
            $model->email=$email; //��������� � ������� email
            $model->token=$token; //��������� � ������� �����
            $model->save();      // ��������� ��� ������ � �������
            //���������� ������ � ������� ������������
            Mail::send('emails.confirm',['token'=>$token],function($u) use ($user){
                $u->from('Wanr36@yandex.ru');
                $u->to($user->email);
                $u->subject('Confirm registration');
            });
            session()->put('message', '��� �������, �������� ����������� �����. ���� ���������  <a href="register/confirm/'.$token.'">������</a> ��� ������������� �����');// back()->with('message','��� �������, �������� ����������� �����. ���� ���������  <a href="/register/confirm/'.$token.'">������</a> ��� ������������� �����');
            return $user;
        }else{
            //return back()->with('message','���� � �����, �������� �����');
            session()->put('message', '���� � �����, �������� �����');// back()->with('message','��� �������, �������� ����������� �����. ���� ���������  <a href="/register/confirm/'.$token.'">������</a> ��� ������������� �����');
            return $user;
        }
    }

}
