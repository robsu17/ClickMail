<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidCredentialsException;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $user = User::query()->where('email', $request->email)->first();

            if (!$user) {
                throw new InvalidCredentialsException();
            }

            $userAttempt = Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ]);

            if (!$userAttempt) {
                throw new InvalidCredentialsException();
            }

            return redirect()->route('campaigns.index');
        } catch (InvalidCredentialsException $exception) {
            return back()->withErrors([$exception->getMessage()])->withInput();
        } catch (\Exception $exception) {
            Log::error('LoginController@login', [
                'exception' => $exception->getMessage(),
            ]);

            return back()->withErrors(['internalError' => 'Erro interno no servidor, tente novamente mais tarde'])->withInput();
        }
    }
}
