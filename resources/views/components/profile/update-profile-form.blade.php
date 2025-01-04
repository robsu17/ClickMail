<form action="{{ route('profile.update', auth()->user()->id) }}" class="space-y-5 h-full" method="post">
    @csrf
    @method('put')
    <x-input-text
        name="name"
        type="text"
        label="Nome"
        autoComplete="off"
        value="{{ auth()->user()->name }}"
    />
    <x-input-text
        name="email"
        type="email"
        label="Email"
        autoComplete="off"
        value="{{ auth()->user()->email }}"
        disabled
    />
    <x-input-text
        name="phone"
        type="text"
        label="Telefone"
        autoComplete="off"
        placeholder="(00) 0 0000 0000"
    />
    <div class="flex justify-end">
        <x-primary-button type="submit">Salvar</x-primary-button>
    </div>
</form>
