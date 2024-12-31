@extends('layouts.auth')

@section('content')
    <div class="flex flex-col items-center space-y-6">
        <div class="w-[350px]">
            <img src="{{ asset('img/logo.svg') }}" alt="logo" class="w-full h-full">
        </div>
        <div class="bg-background-secondary px-5 py-6 min-w-[400px] rounded-md">
            <form class="space-y-5" action="{{ route('register.store') }}" method="post">
                @csrf
                <x-input-text
                    name="name"
                    type="text"
                    label="Nome de usuário"
                    placeholder="John Doe"
                    error="{{ $errors }}"
                />
                <x-input-text
                    name="email"
                    type="email"
                    label="Email"
                    placeholder="email@example.com"
                    error="{{ $errors }}"
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
                        href="{{ route('login') }}"
                        class="text-white hover:text-[#c9c9c9]"
                    >
                        Já possui conta?
                    </a>
                    <x-primary-button type="submit">Registrar</x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
