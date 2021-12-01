<x-dashboard-app-layout>
    <x-slot name="header">
     {{ __('Teams') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <livewire:teams-table exportable />
            </div>
        </div>
    </div>
</x-dashboard-app-layout>
