<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        // Redirect to dashboard if the user is already authenticated
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }

        return view('siginIn');
    }

    public function authenticate(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // If validation fails, return back with error messages and input
        if ($validator->fails()) {
            return back()->with('toast_error', join(', ', $validator->messages()->all()))->withInput();
        }

        // Get the credentials from the request
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Regenerate the session
            $request->session()->regenerate();

            // Redirect to the dashboard without any success message
            return redirect()->route('dashboard');
        }

        // If authentication fails, return back with an error message
        return back()->with('toast_error', 'Email atau Password yang dimasukkan tidak valid!')->withInput();
    }

    public function logout(Request $request)
    {
        // Logout the user
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token
        $request->session()->regenerateToken();

        // Redirect to the sign-in page
        return redirect()->route('signIn');
    }
}
