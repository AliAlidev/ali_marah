<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }  
      

    public function createSignin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $userAuth = Auth::user();

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Logged-in');
                        
        }

        return redirect("login")->withSuccess('Credentials are wrong.');
    }


    public function signup()
    {
        return view('auth.signup');
    }
      

    public function customSignup(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("dashboard")->withSuccess('Successfully logged-in!');
    }


    public function createUser(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboardView()
    {
        if(Auth::check()){
            $userAuth = Auth::user();
            return view('base',compact('userAuth'));
        }
        return redirect("login");
    }
    

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}