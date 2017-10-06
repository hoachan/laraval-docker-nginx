<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    //
    public function create(){
        return view('registration.create');
    }

    public function store(){

        //validate the form
        $this->validate(request(), [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        //create and save the user
        $user = User::create([
            'name'          => request('name'),
            'email'         => request('email'),
            'password'      => bcrypt(request('password'))
        ]);

        //Sign them in
        // \App::login();
        auth()->login($user);

        //redirect
        return redirect('/');
    }
}
