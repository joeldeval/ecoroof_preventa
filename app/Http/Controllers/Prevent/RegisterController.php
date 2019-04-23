<?php

namespace App\Http\Controllers\Prevent;

use App\Prevent;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Create a new authentication controller instance.
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
            'phone' => 'required|numeric|max:10',
            'email' => 'email|max:255|unique:prevent',
            'howMany' => 'required|numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function register(Request $request)
    {
        $messages = [
            'name.required'    => 'Debes escribir tu nombre completo.',
            'phone.required'    => 'Debes escribir un número de teléfono.',
            'phone.numeric'    => 'El número de teléfono sólo deben ser números.',
            'email.email' => 'El correo electrónico es incorrecto',
            'email.unique' => 'El correo electrónico ya fué registrado anteriormente.',
            'howMany.required'      => 'Escribe cuantos metros cuadrados estás interesado en comprar',
            'howMany.numeric'      => 'Sólo deben ser un valro numérico',
        ];
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'email|max:255|unique:prevent',
            'howMany' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

        Prevent::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'howMany' => $request->howMany,
        ]);

        return view('thanks');
    }
}
