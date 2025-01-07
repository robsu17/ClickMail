@extends('layouts.auth')
@section('title', 'Entrar')

@section('content')
    <div class="flex flex-col items-center space-y-6">
        <div class="w-[350px]">
            <img src="{{ asset('img/logo.svg') }}" alt="logo" class="w-full h-full">
        </div>

        <div class="bg-background-secondary px-5 py-6 min-w-[400px] rounded-md">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <span class="text-red-500 text-sm font-bold">{{ $error }}</span>
                @endforeach
            @endif
            <form class="space-y-5" action="{{ route('login.store') }}" method="post">
                @csrf
                <x-input-text
                    name="email"
                    type="email"
                    label="Email"
                    placeholder="email@example.com"
                    error="{{ $errors }}"
                    autocomplete="off"
                />
                <x-input-text
                    name="password"
                    type="password"
                    label="Senha"
                    placeholder="********"
                    error="{{ $errors }}"
                />
                <div class="flex justify-between items-center">
                    <a
                        href="{{ route('register') }}"
                        class="text-white hover:text-[#c9c9c9]"
                    >
                        Não possui conta?
                    </a>
                    <x-primary-button type="submit">Entrar</x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
