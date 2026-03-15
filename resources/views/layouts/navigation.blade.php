<div x-data="{ open: false }">

    {{-- Mobile top bar --}}
    <div class="md:hidden flex items-center justify-between p-4" style="background:#c2ffe1; color:#2a0d42;">
        <div class="font-bold text-lg">
            {{ config('app.name') }}
        </div>

        <button @click="open = !open">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    {{-- Overlay mobile --}}
    <div x-show="open" @click="open = false" class="fixed inset-0 bg-black/40 z-30 md:hidden"></div>

    {{-- Sidebar --}}
    <aside class="fixed md:static z-40 top-0 left-0 h-full w-64 transform transition-transform duration-200 ease-in-out"
        style="background:#c2ffe1; color:#2a0d42;"
        :class="open ? 'translate-x-0' : '-translate-x-full md:translate-x-0'">

        {{-- Logo --}}
        <div class="p-6 text-2xl font-bold border-b" style="border-color:#9fd9c4;">
            {{ config('app.name') }}
        </div>

        {{-- Menu --}}
        <nav class="mt-6">

            <a href="{{ route('dashboard') }}"
                class="flex items-center px-6 py-3 transition hover:bg-[#aae1c6]
                {{ request()->routeIs('dashboard') ? 'bg-[#aae1c6]' : '' }}">

                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12l2-2 7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2v10a1 1 0 01-1 1h-3" />
                </svg>

                Dashboard
            </a>

            <a href="{{ route('profile.edit') }}" class="flex items-center px-6 py-3 hover:bg-[#aae1c6] transition">

                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1118 12" />
                </svg>

                Profile
            </a>

        </nav>

        {{-- Bottom user section --}}
        <div class="absolute bottom-0 w-full p-6 border-t" style="border-color:#9fd9c4;">

            <div class="mb-2 text-sm">
                {{ Auth::user()->name }}
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button onclick="event.preventDefault(); this.closest('form').submit();"
                    class="w-full text-left px-4 py-2 rounded hover:bg-[#aae1c6]">
                    Log Out
                </button>
            </form>

        </div>

    </aside>

</div>
