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
        return view('user.register');
    }

    public function create(Request $request)
    {
        // Validate Formfields
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('authenticate', 'email')],
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
        return view('user.login');
    }

    public function read(Request $request)
    {
        //
        // Auth
        // Test if email_verified_at isn't NULL/empty
    }

    public function show()
    {
        return view('user.profile')->with('user', $user[0]);
    }

    public function edit(Request $request)
    {
        return redirect('/')->with('message', 'User-settings succesfully changed!');
    }
}
