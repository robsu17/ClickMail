<header class="w-full bg-background-secondary py-4 px-20 flex items-center justify-between">
    <div class="flex items-center gap-28">
        <div>
            <img src="{{ asset('img/logo.svg') }}">
        </div>
        <ul class="flex text-white space-x-3">
            @foreach($links as $link)
                <li>
                    <a
                        href="#"
                        class="{{ $link['key'] == request()->path() ? 'text-[#1C65FF] font-bold' : 'hover:text-white/80' }}"
                    >
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <x-layout.menu-dropdown />
</header>
