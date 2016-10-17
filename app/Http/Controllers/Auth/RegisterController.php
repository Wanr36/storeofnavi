<?php

namespace Storeofnavi\Http\Controllers\Auth;

use Storeofnavi\User;
use Validator;
use Storeofnavi\ConfirmUsers;
use Mail;
use Storeofnavi\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if(!empty($user->id)){
            $email=$user->email;  //это email, который ввел пользователь
            $token=str_random(32); //это наша случайная строка
            $model=new ConfirmUsers; //создаем экземпляр нашей модели
            $model->email=$email; //вставляем в таблицу email
            $model->token=$token; //вставляем в таблицу токен
            $model->save();      // сохраняем все данные в таблицу
                                //отправляем ссылку с токеном пользователю
            /*Mail::send('emails.confirm',['token'=>$token],function($u) use ($user){
                $u->from('admin@site.ru');
                $u->to($user->email);
                $u->subject('Confirm registration');
            });*/
            session()->put('message', 'Все классно, осталось подтвердить почту. Наша читерская  <a href="register/confirm/'.$token.'">Ссылка</a> для подтверждения почты');// back()->with('message','Все классно, осталось подтвердить почту. Наша читерская  <a href="/register/confirm/'.$token.'">Ссылка</a> для подтверждения почты');
            return $user;
        }else{
            //return back()->with('message','Беда с базой, попробуй позже');
            session()->put('message', 'Беда с базой, попробуй позже');// back()->with('message','Все классно, осталось подтвердить почту. Наша читерская  <a href="/register/confirm/'.$token.'">Ссылка</a> для подтверждения почты');
            return $user;
        }
    }

}
