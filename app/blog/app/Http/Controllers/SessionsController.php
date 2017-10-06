<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    
    public function __construct(){
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create(){
        return view('sessions.create');
    }

    public function destroy(){

        auth()->logout();

        return redirect('/');
    }

    public function store(){
        //Attemp to authenticate the user
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message'   => 'please check your credentials and try again.'
            ]);
        };

        //if so, sign them in

        //redirect to the home page
        return redirect('/');
    }
}
