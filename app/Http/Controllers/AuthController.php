<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        if(Auth::guard('guru')->attempt(['nip'=>$request->nip,'password'=>$request->password])){
            return redirect()->intended('/dashboard');
        }else{
             echo "Gagal Login";
        }
    }
}
