<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => "required",
            'email' => "required|email",
            'password' => "required|confirmed"

        ]);
        $data['password'] = bcrypt($data['password']); // for encrypt password

        $user = User::create($data);

        if ($user) {
            return redirect()->route('login');
        }

    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => "required|email",
            'password' => "required"
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        }
    }

    public function dashboard()
    {
        if (Auth::check()) {
            // Return the dashboard view here, do not redirect again
            return view('dashboard');
        } else {
            // Redirect to login if the user is not authenticated
            return redirect()->route('login');
        }
    }
    public function logout()
    {
        Auth::logout();
        // Redirect to login if the user is not authenticated
        return view('login');

    }
}
