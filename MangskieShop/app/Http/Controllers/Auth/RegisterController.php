<?php

namespace MangskieShop\Http\Controllers\Auth;

use MangskieShop\User;
use MangskieShop\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'firstName' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'middleName' => 'required|string|max:255',
            'address' => 'required|string|min:6',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \MangskieShop\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'surname' => $data['surname'],
            'middleName' => $data['middleName'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role'=>'Client',
            'status'=>'Active',
        ]);
    }
}
