<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;

class LogoutController
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
