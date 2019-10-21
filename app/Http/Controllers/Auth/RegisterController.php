<?php

namespace App\Http\Controllers\Auth;

use App\Persona;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'primer_nombre' => ['required', 'string', 'max:255'],
            'email-register' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password-register' => ['required', 'string', 'min:8'],
        ], [
            'email-register.unique'=>'Ya existe un usuario asociado a este correo electrónico',
            'password-register.min'=>'La contraseña debe contener minimo 8 caracteres',
        ],[
            'email-register' => 'correo electrónico',
            'password-register' => 'contraseña',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['fecha_nacimiento'] = date('Y-m-d', strtotime($data['fecha_nacimiento']));
        $persona = Persona::create([
            'primer_nombre' => $data['primer_nombre'],
            'segundo_nombre' => $data['primer_nombre'],
            'primer_apellido' => $data['primer_apellido'],
            'segundo_apellido' => $data['segundo_apellido'],
            'correo' => $data['email-register'],
            'sexo' => $data['sexo'],
            'terminos' => $data['terminos'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
        ]);
        return User::create([
            'email' => $data['email-register'],
            'password' => Hash::make($data['password-register']),
            'persona_id' =>$persona->id,
            'rol_id' => 2
        ]);
    }
}
