<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //

    public function create(){
        return view('users.register');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'username'=>['required',Rule::unique('users','username')],
            'password'=>'required|min:6'
        ]);
        //hash password
        $formFields['password']=bcrypt($formFields['password']);
        
        
        if($request->hasFile('profile-image')){
            $formFields['profile-image']= $request->file('profile-image')->store('profile-images','public');
        }

        //create user
        $user = User::create($formFields);

        //Login
        auth()->login($user);
        
        return redirect('/')->with('message','User succesfully registered and login');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','User logged out');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);

        if(auth()->attempt(($formFields))){
            $request->session()->regenerate();

            return redirect('/')->with('message','Succesfully logged in.');
        }
        else{
            return back()->withErrors(['email'=>'Invalid credentials'])->onlyInput('email');
        }
    }
}
