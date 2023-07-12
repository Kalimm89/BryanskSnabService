<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', 'Регистрация пройдена');
        Auth::login($user);
        return redirect('/');
    }

    public function loginForm() {
        // if(Auth::user()) {
        //     return redirect()->route('home');
        // } else {
        //     return view('user.login');
        // }
        if (Auth::check())
            {
                return redirect()->route('home');
            }
            return view('user.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            session()->flash('success', 'Вы авторизованны!');
            if(Auth::user()->is_admin) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->back()->with('error', 'Неверный логин или пароль');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
