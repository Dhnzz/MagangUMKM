<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $creadential = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ], [
            'email.required' => 'Kolom email harap diisi',
            'email.email' => 'Harus berbentuk email',
            'password.required' => 'Kolom password harap diisi',
        ]);

        if (Auth::attempt([$credential])) {
            $request->session()->regenerate();
            $role = Auth::user()->role->slug;
            switch ($role) {
                case 'admin':
                    return redirect()->intended('/dashboard/admin');
                    break;
                
                case 'pemilik':
                    return redirect()->intended('/dashboard/pemilik');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }
}
