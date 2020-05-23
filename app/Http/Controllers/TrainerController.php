<?php

namespace App\Http\Controllers;

use App\Trainer;
use App\User;
use App\Userinfo;
use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequest $request)
    {
        //
        $user=User::create([
            'nick' => $request['nick'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'rol_id' => '1',
            'slug' => uniqid('',true)
        ]);
        $userinfo=Userinfo::create([
            'user_id'=> $request['id'],
            'name'=> $request['name'],
            'lastname'=> $request['lastname'],
            'img'=> 'defaultusr.jpg',

        ]);
        $trainer=Trainer::create([
            'user_id'=> $user['id'],
            'state'=> $request['state'],
            'city'=> $request['city']
        ]);

        return back()->with('Sucess','Insertado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //
        if(request()->wantsJson()){
    
            return["trainer"=>$trainer->load('users','userinfos'),//this line is gonna load all the wine data also with specifications
                    "route"=>route('cpanel',$trainer)//retreive a route interpretated by laravel with the $wine object
                    ];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequest $request, Trainer $trainer)
    {
        //
        $user=User::where("id",$trainer->user_id);
        $user->update([
            'nick' => $request['nick'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'rol_id' => '1',
            'slug' => uniqid('',true)
        ]);
        $userinfo=Userinfo::where("user_id",$trainer->user_id);
        $userinfo=Userinfo::create([
            'name'=> $request['name'],
            'lastname'=> $request['lastname'],
            'img'=> 'defaultusr.jpg',

        ]);
        $trainer=Trainer::create([
            'state'=> $request['state'],
            'city'=> $request['city']
        ]);
        return back()->with('Success','Datos Updateados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        //
        $trainer->delete();
    User::where("id",$trainer->user_id)->delete();
    Userinfo::where("user_id",$trainer->user_id)->delete();
    return back()->with('Eliminado','Se Eliminó el registro adecuadamente');

    }
}
