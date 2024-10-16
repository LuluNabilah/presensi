<?php

namespace App\Http\Controllers;

use App\Models\Guru;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'nip' => 'required',
            'password' => 'required'
        ]);
    
        if ($validator->fails()) {
            // Validation failed, redirect back with error message
            return redirect()->back()->withErrors($validator);
        }
    
        // Attempt to login the user
        $credentials = $request->only(['username', 'password']);
        if (Auth::attempt($credentials)) {
            // Login successful, redirect to dashboard page
            return redirect()->intended(route('dashboard'));
        } else {
            // Login failed, redirect back with error message
            return redirect()->back()->withErrors(['username' => 'Invalid username or password']);
        }
    }

}
