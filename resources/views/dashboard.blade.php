<x-app-layout>
    <x-slot name="header">
        <x-page-title>
            {{ __('Dashboard') }}
        </x-page-title>
    </x-slot>

    <x-page-content>
        <x-card>
            <x-card-item>
                You're logged in!
            </x-card-item>
        </x-card>
    </x-page-content>
</x-app-layout>
