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

    }

    public function create(Request $request)
    {
        
    }

    public function login()
    {
        return view('user.login');
    }

    public function read(Request $request)
    {
        // Validate Formfields
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Authenticate
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            // Admin / User
            if(auth()->user()->role == 2) {
                return redirect('/admin-panel')->with('message', 'Youre an admin!');
            } else {
                return redirect('/')->with('message', 'You are now logged in!');
            } 
            
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function show()
    {
        
    }

    public function edit(Request $request)
    {
        
    }
}
