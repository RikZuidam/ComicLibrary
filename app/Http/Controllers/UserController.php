<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function index()
    {
        // Nothing
    }

    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        // Validate Formfields
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('user', 'email')],
            'password' => 'required|confirmed|min:3'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create([
            'name' => $formFields['name'],
            'email' => $formFields['email'],
            'verify_token' => 'inprogress',
            'email_verified_at' => null,
            'password' => $formFields['password']
        ]);

        // Authentication add login statement
        auth()->login($user);

        // Redirect to Home-Page
        return redirect('/')->with('message', 'Welcome ' . $formFields['name']);
    }

    public function login()
    {
        return view('login');
    }

    public function read(Request $request)
    {
        
    }

    public function show()
    {
        
    }

    public function edit(Request $request)
    {
        
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }
}
