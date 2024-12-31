<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        $attempt = Auth::attempt($request->only('email', 'password'));

        if (!$attempt) {
            return redirect()->back()->withErrors(['userNotCreated' => 'Erro ao cadastrar usuário.']);
        }

        return redirect()->route('dashboard');
    }
}
