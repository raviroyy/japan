<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');


        // Attempt to log in
        if (Auth::attempt($credentials)) {
            return redirect()->intended('user.home');
        }

        // Redirect back with an error message
        return redirect()->back()->withInput($request->only('email'))
            ->withErrors(['email' => 'invalid.']);
    }




    public function register()
{
    return view('auth.register');
}

public function register_req(AuthRequest $request)

{
    $validatedData = $request->validated();

    // Create the user
    $user = User::create([
        'name' => $validatedData['name'],
        'phone' => $validatedData['phone'],
        'address' => $validatedData['address'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'usertype'=>'user',//default user
    ]);

    // Log in the user
    Auth::login($user);

    // Redirect to user home
    return redirect()->route('user.home');
}


    public function logout()
    {

        Auth::logout();    // Log out the user
        Session::flush();  // Clear all session data
        return redirect('/');  // Redirect to the login page or wherever you want
    }
}
