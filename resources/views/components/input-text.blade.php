<label class="flex flex-col space-y-1.5">
    <span class="text-white font-bold text-sm">{{ $label }}</span>
    <input
        class="bg-background-tertiary placeholder:text-placeholder px-3 py-2 rounded-md outline-none text-white"
        {{ $attributes }}
    />
    @if($errors->has($name))
        <span class="text-red-500 text-sm">{{ $errors->first($name) }}</span>
    @endif
</label>
