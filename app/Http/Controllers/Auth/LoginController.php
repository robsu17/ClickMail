<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $userNotExist = User::query()
            ->where('email', $request->email)
            ->first();

        if (!$userNotExist) {
            return redirect()->back()->withErrors(['invalidCredentials' => 'Credênciais inválidas.']);
        }

        $credentials = $request->only('email', 'password');

        $isAttempt = Auth::attempt($credentials);

        if (!$isAttempt) {
            return redirect()->back()->withErrors(['invalidCredentials' => 'Credênciais inválidas.']);
        }

        return redirect()->route('dashboard.index');
    }
}
