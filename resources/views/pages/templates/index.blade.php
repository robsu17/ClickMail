@extends('layouts.dashboard')
@section('title', 'Templates')

@section('content')
    <div class="flex flex-col justify-center items-center h-[88vh]">
        @if(count($templates) > 0)
            <div class="bg-background-secondary p-4 rounded-md w-[800px]">
                <div class="flex items-center gap-3">
                    <a href="{{ route('templates.create') }}">
                        <x-primary-button type="button">
                            Criar template
                        </x-primary-button>
                    </a>
                    <x-input-text name="pesquisar" placeholder="Pesquisar" />
                </div>
            </div>
        @else
            <div class="text-center">
                <div class="mb-4">
                    <img src="{{ asset('img/template.svg') }}" alt="Ícone de um template" class="mx-auto">
                </div>
                <h1 class="text-xl mb-4">Você ainda não criou nenhuma template</h1>
                <a href="{{ route('templates.create') }}">
                    <x-primary-button type="button">
                        Criar template
                    </x-primary-button>
                </a>
            </div>
        @endif
    </div>
@endsection
