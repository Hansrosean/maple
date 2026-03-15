<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color:#2a0d42;">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6 rounded-lg" style="background:#aae1c6; color:#2a0d42;">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-sm">Users</h3>
                <p class="text-2xl font-bold mt-2">120</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-sm">Orders</h3>
                <p class="text-2xl font-bold mt-2">85</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-sm">Revenue</h3>
                <p class="text-2xl font-bold mt-2">$2,400</p>
            </div>

        </div>

    </div>

</x-app-layout>
