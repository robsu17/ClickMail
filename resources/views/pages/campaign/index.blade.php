@extends('layouts.dashboard')
@section('title', 'Campanhas')

@section('content')
    <div class="flex justify-center items-center h-[88vh]">
        <div class="text-center">
            <div class="mb-4">
                <img src="{{ asset('img/clipboard.svg') }}" alt="Ícone de um clipboard" class="mx-auto">
            </div>
            <h1 class="text-xl font-semibold mb-4">Você ainda não criou nenhuma campanha.</h1>
            <a href="{{ route('campaigns.create') }}">
                <x-primary-button type="button">
                    Criar campanha
                </x-primary-button>
            </a>
        </div>
    </div>
@endsection
