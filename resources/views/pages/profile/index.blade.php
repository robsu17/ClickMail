@extends('layouts.dashboard')
@section('title', 'Meu Perfil')

@section('content')
    <div class="h-full">
        <x-notifications.success messageSession="successUpdateProfile" />
        <h1 class="text-xl text-white">Meu perfil</h1>
        <x-divider />
        <x-profile.update-profile-form />
        <x-profile.change-password />
    </div>
@endsection
