<x-dashboard-app-layout>
    <x-slot name="header">
        <h2>Users</h2>
    </x-slot>
    
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
                <livewire:users-table />
            </div>
        </div>
    </div>
</x-dashboard-app-layout>
