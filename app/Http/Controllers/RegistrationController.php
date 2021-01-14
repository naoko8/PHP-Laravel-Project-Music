<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register_create(){
        return view('register');
    }
    public function register_store(Request $request){

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        auth()->login($user);
        return redirect()->to('/posts');
    }

    public function login(){

        return view('login');
    }
    public function login_check(Request $request){

        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->except('_token');

        if (Auth::attempt($credentials)) {
            return redirect('/home');
        }
        else{
            return redirect('login')->with('error');
        }
    }
    public function logout(){

        Auth::logout();
        return redirect('/home');

    }

}
