<label class="flex flex-col space-y-1.5">
    <span class="text-zinc-300 font-bold text-sm">{{ $label }}</span>
    <input
        class="bg-background-tertiary placeholder:text-placeholder px-3 py-2 rounded-md outline-none text-zinc-300 disabled:opacity-75 disabled:border disabled:border-gray-600/60"
        {{ $attributes }}
        value="{{ old($name) }}"
    />
    @if($errors->has($name))
        <span class="text-red-500 text-sm">{{ $errors->first($name) }}</span>
    @endif
</label>
