<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'nik' => ['required','unique:users','numeric'],
            'tempat_lahir' => ['required'],
            'alamat_tinggal' => ['required'],
            'alamat_asal' => ['required'],
            'no_telp' => ['required','numeric'],
            'pekerjaan' => ['required'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nik' => $data['nik'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tgl_lahir' => Carbon::parse($data['tgl_lahir'])->format('Y-m-d'),
            'alamat_tinggal' => $data['alamat_tinggal'],
            'alamat_asal' => $data['alamat_asal'],
            'no_telp' => $data['no_telp'],
            'pekerjaan' => $data['pekerjaan'],
        ]);
       //  $date = str_replace("-", "", $request->tgl_lahir);
       // $siswa['tgl_lahir'] = Carbon::parse($date)->format('Y-m-d');
    }
    // protected function create(Request $request)
    // {
    //     // return User::create([
    //     //     'name' => $data['name'],
    //     //     'email' => $data['email'],
    //     //     'password' => Hash::make($data['password']),
    //     //     'nik' => $data['nik'],
    //     // ]);
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = $request->password;
    //     $user->nik = $request->nik;
    //     $user->save();
    // }
}
