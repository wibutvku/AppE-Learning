<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Register Hanya tersedia pada role admin
    public function registerAkun()
    {
        return view('content.admin.master-register');
    }

    public function registerCreate(RegisterRequest $request):RedirectResponse
    {
        $dataRegister = User::create($request);

        return redirect()->back();
    }
}
    