<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;   
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email'=> 'required|unique:users',
            'password'=>'required|min:5',
            'phone' => 'required|max:20',
        ]);
        User ::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,]);
            return redirect()->route('login');
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($request->only('username', 'password'))) {
            $user = Auth::user();
            $request->session()->put('user', $user);
    
            if ($user->role == 'admin') {
                return redirect()->route('admindashboard');  
            } else {
                return redirect()->route('dashboard');
            }
        } else {
            return back()->withErrors([
                'loginError' => 'Maaf Username atau Password Salah'
            ])->withInput($request->only('username'));
        }
    }
    
    public function logout() {
        Auth::logout();
        session()->flush();
        return redirect()->route('index');
    }
}
