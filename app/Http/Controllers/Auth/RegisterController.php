<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Userinfo;
use App\Trainer;
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
        //dd($data);
        $rules=[
            'nick' => ['required', 'string', 'max:20'],
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
        if(array_key_exists('trainer',$data)){
            //dd($data);
            $rules['state']=['required'];
            $rules['city']=['required'];
            //dd($rules);
        }
        //dd($data);
        return Validator::make($data,$rules );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //dd($data);
        
        $user=User::create([
            'nick' => $data['nick'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol_id' => '2',
            'slug' => uniqid('',true)
        ]);
        $userinfo=Userinfo::create([
            'user_id'=> $user['id'],
            'name'=> $data['name'],
            'lastname'=> $data['lastname'],
            'img'=> 'defaultusr.jpg',

        ]);

        if(array_key_exists('trainer',$data)){
            //dd($data);
            $trainer=Trainer::create([
                'user_id'=> $user['id'],
                'state'=> $data['state'],
                'city'=> $data['city']
            ]);
           $user->update(['rol_id'=>'1']);
        }
        //dd($user->load('userinfos'));//FIXME: EHHHHHH!!! estó esta momentaneo para interrumpir la acción y ver que se está regresandoo
        //dd($trainer);
        return $user;
    }
}
