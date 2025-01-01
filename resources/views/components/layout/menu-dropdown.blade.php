<div
    x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
    x-on:keydown.escape.prevent.stop="close($refs.button)"
    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
    x-id="['dropdown-button']"
    class="relative"
>
    <!-- Button -->
    <button
        x-ref="button"
        x-on:click="toggle()"
        :aria-expanded="open"
        :aria-controls="$id('dropdown-button')"
        type="button"
        class="relative flex items-center gap-3 cursor-pointer hover:bg-background-tertiary p-1 rounded-md"
    >
        <div class="w-10 rounded-md overflow-hidden">
            <img class="w-full h-full" src="https://github.com/robsu17.png" alt="avatar">
        </div>
        <div class="text-white">
            <h1 class="text-start">{{ $user->name }}</h1>
            <p class="text-gray-400 text-xs">Analista de Sistemas</p>
        </div>
    </button>
    <div
        x-cloak
        x-ref="panel"
        x-show="open"
        x-transition.origin.top.left
        x-on:click.outside="close($refs.button)"
        :id="$id('dropdown-button')"
        class="absolute left-0 min-w-48 rounded-lg shadow-sm mt-2 z-10 origin-top-left p-1.5 outline-none border border-gray-800 bg-background-tertiary"
    >
        <a
            href="#"
            class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-white hover:bg-background-secondary  disabled:opacity-50 disabled:cursor-not-allowed"
        >
            Perfil
        </a>

        <a
            href="#"
            class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-white hover:bg-background-secondary  disabled:opacity-50 disabled:cursor-not-allowed"
        >
            Sair
        </a>
    </div>
</div>
