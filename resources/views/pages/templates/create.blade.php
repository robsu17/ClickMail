@extends('layouts.dashboard')
@section('title', 'Criar template')

@section('content')
    <div class="min-h-full">
        <form
            action="{{ route('templates.store') }}"
            class="bg-background-secondary mx-auto p-4 rounded-md flex flex-col gap-3"
            style="width: 488px;"
            method="post"
        >
            @csrf
            <x-input-text
                name="name"
                type="text"
                label="Nome"
                placeholder="Escolha um nome para seu template"
                autocomplete="off"
                error="{{ $errors }}"
            />
            <x-text-area
                name="html"
                type="text"
                label="Corpo(HTML)"
                placeholder="Escolha um nome para seu template"
                autocomplete="off"
                error="{{ $errors }}"
            />
            <div class="flex justify-end">
                <x-primary-button type="submit">Salvar</x-primary-button>
            </div>
        </form>
    </div>
@endsection
