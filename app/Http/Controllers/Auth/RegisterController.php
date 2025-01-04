<?php

namespace App\Http\Controllers\Auth;

use App\Actions\RegisterUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        try {
            $user = RegisterUser::run(
                name: $request->name,
                email: $request->email,
                password: $request->password
            );

            Auth::login($user);

            return redirect()->route('campaigns.index');
        } catch (\Exception $exception) {
            Log::error('RegisterController@register', [
                'exception' => $exception->getMessage(),
            ]);

            return redirect()->back()->withErrors('Erro ao cadastrar novo usuário.')->withInput();
        }
    }
}
