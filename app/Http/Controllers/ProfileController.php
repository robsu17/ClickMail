<?php

namespace App\Http\Controllers;

use App\Actions\UpdateProfile;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile.index');
    }

    public function update(UpdateProfileRequest $request, $id)
    {
        try {
            UpdateProfile::run(
                name: $request->name,
                id: $id
            );

            return redirect()->route('profile.index')
                ->with('successUpdateProfile', 'Perfil atualizado com sucesso.');
        } catch (\Exception $exception) {
            Log::error('ProfileController@update', [
                'message' => $exception->getMessage(),
            ]);
            return redirect()->route('profile.index')->withErrors([
                'errorUpdateProfile' => 'Erro ao atualizar dados do usuário.'
            ]);
        }
    }
}
