<?php
namespace Storeofnavi\Http\Controllers\Auth;

use Storeofnavi\User;
use Storeofnavi\ConfirmUsers;
use Storeofnavi\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterConfirmController extends Controller{
    public function confirm($token)
    {
        $model = ConfirmUsers::where('token','=',$token)->firstOrFail(); //�������� ������ � ���������� �������, ���� ������ ��� �� ����� ������ 404
        $user=User::where('email','=',$model->email)->first(); //�������� ������������ ����� �������� ������������� ����������� ������
        $user->status=1; // ������ ������ �� 1
        $user->save();  // ��������� ���������
        $model->delete(); //������� ������ �� confirm_users
        return view('main'); // �������� ������������ �������� �������
    }
}