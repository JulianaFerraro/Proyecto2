<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Document;
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
       
        /*return Validator::make($data, [
            'docuement_number' => ['required', 'string', 'min:8', 'max:10','unique:users'],
            'names' => ['required', 'string', 'max:255'],
            'last_names' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'age' => ['required', 'string', 'max:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'document_types_id' => ['required', 'string','max:2'],
            'gender_id' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ''
        ]);*/
        return validator::make($data, [
            'names'=>'required'
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'docuement_number' => $data['docuement_number'],
            'names' => $data['names'],
            'last_names' => $data['last_names'],
            'birth_date' => $data['birth_date'],
            'age' => $data['age'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'document_types_id' => $data['document_types_id'],
            'gender_id' => $data['gender_id'],
        ]);
    }
}
