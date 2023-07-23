<x-app-layout>
    <x-slot name="header">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{__('Dashboard')}}
        </x-nav-link>
        <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
            {{__('Index')}}
        </x-nav-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>