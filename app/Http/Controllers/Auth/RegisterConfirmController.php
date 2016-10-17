<?php
namespace Storeofnavi\Http\Controllers\Auth;

use Storeofnavi\User;
use Storeofnavi\ConfirmUsers;
use Storeofnavi\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterConfirmController extends Controller{
    public function confirm($token)
    {
        $model = ConfirmUsers::where('token','=',$token)->firstOrFail(); //выбираем запись с переданным токеном, если такого нет то будет ошибка 404
        $user=User::where('email','=',$model->email)->first(); //выбираем пользователя почта которого соответствует переданному токену
        $user->status=1; // меняем статус на 1
        $user->save();  // сохраняем изменения
        $model->delete(); //Удаляем запись из confirm_users
        return view('main'); // Добавить пользователя изменить переход
    }
}