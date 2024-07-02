<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            // 'phone' => ['required', 'digits:10', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'agree'=>['accepted'],
            'ref_code' => ['sometimes', 'string', 'max:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        // $validation = Validator::make($request->all(), validator());
        $validation = $this->validator($request->all());
        if($validation->fails()){
            // dd($validation);
            return back()->withErrors($validation)->withInput();
        }
        $user =  User::create([
            'name' => $request->name,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'ref_code' => ,
            // 'referrer_code' => isset($request->ref_code)? $request->ref_code : null,
        ]);
       
        // dd($user);
        $user->ref_code = Str::random(8);
        $user->referrer_code = isset($request->ref_code)? $request->ref_code : null;
        $user->save();
        
        User::create_wallet($user->id);
        // User::create_referral($user->id);

        if (isset($request->ref_code)) {
            
        }
        return redirect()->route('home');
        // return $user;
    }
}
