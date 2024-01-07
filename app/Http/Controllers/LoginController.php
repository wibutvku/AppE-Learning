<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function store(LoginRequest $request)
    {
        $data = $request->validated();
        if(Auth::attempt($data)){
            if(auth()->user()->role === 'siswa' ){
                $first_time_login = false;
                if(auth()->user()->first_login === 0) {
                    $first_time_login = true;
                    Auth::user()->first_login = 1;
                    Auth::user()->last_login = now();
                    Auth::user()->save();
                    $request->session()->regenerate();
                    return redirect()->route('confirm-role');
                }
                $request->session()->regenerate();
                return redirect()->route('appSiswa');

            }else if(auth()->user()->role === 'guru'){
                $first_time_login = false;
                if(auth()->user()->first_login === 0) {
                    $first_time_login = true;
                    Auth::user()->first_login = 1;
                    Auth::user()->last_login = now();
                    Auth::user()->save();
                    $request->session()->regenerate();
                    return redirect()->route('confirm-role');
                }
                $request->session()->regenerate();
                return redirect()->route('beranda-guru');

            }else if(auth()->user()->role === 'admin'){
                return redirect()->route('appAdmin');
            }
            else{
                return redirect('/')->with('error', 'Kamu Bukan Siapa-siapa');
            }
 
            return redirect()->route('app');
        }
        
        return redirect()->back();
    }

    public function keluar(){
        Session::flush();
        
        Auth::logout();

        return redirect('/login');
    }
    
}
