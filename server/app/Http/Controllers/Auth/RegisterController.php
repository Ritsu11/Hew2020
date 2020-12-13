<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
        $rules = [
            'name.required' => 'ニックネームを入力してください',
            'name.string' => '文字を入力してください',
            'name.regex' => '使用できない記号が含まれています',
            'name.max' => '64文字以内で入力してください',
            'name.unique' => 'このニックネームは既に使用されています',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => '文字を入力してください',
            'email.email' => 'メールアドレスを入力してください',
            'email.max' => '255文字以内で入力してください',
            'email.unique' => 'このメールアドレスは既に使用されています',
            'password.required' => 'パスワードを入力してください',
            'password.string' => 'パスワードを入力してください',
            'password.min' => '8文字以上入力してください',
            'password.confirmed' => 'パスワードが一致しません'
        ];

        // 'regex:/^[^!"#$%&\'()\.,\/:;<=>?@\[\\\]^`{|}~\s]+$/'

        return Validator::make($data, [
            'name' => ['required', 'unique:users', 'string', 'max:64',],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
