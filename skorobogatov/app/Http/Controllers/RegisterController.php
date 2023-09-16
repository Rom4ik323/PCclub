<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    public function create(){
        return view('register.regform');
    }


    public function store(Request $request){
        // dd($request);
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
        ]);

       $user = User::create(['name'=>$request->name,
                            'email'=>$request->email,
                            'password'=>bcrypt($request->password)]);

        Auth::login($user);

            return redirect('/');
    }

    public function loginform(){
        return view('register.loginform');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        
        if(Auth::user()->isAdmin){
            $orders = DB::table('orders')->get();
            return redirect('/adminpanel');

        }
        else{
            return redirect('/');
        }
    }
    return back()->withErrors([
        'email' => 'Неверное имя пользователя или пароль',
    ])->onlyInput('email');
    



    }

    public function logout(){
Auth::logout();
return redirect('/');
    }
}
