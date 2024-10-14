<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only('nip', 'password'))) {
            if (Auth::guru()->level == 'guru') {
                return redirect('/dashboard');
            } else {
                return redirect('/dashboard');
    }
        }
        return redirect('/');
    }
}
