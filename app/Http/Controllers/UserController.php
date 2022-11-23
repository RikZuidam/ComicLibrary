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
        //
    }

    public function register()
    {
        return view('user.register');
    }

    public function create(Request $request)
    {
        //
        // Auth
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

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }
}
