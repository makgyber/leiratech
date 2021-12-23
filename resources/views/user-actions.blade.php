<div>
    <a href="{{route('user.create')}}"  class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">
        {{ __('Add User') }}
    </a>
    

    <x-jet-button wire:click="$toggle('modal')" class="mb-4">
        {{ __('Delete selected') }}
    </x-jet-button>
    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">Delete selected items?</x-slot>
                            
        <x-slot name="content"></x-slot>

        <x-slot name="footer">
            <x-jet-button wire:click="$toggle('modal')">
                {{ __('Cancel') }}
            </x-jet-button>
            <button wire:click="deleteSelected" 
                class="p-3 border border-red-400 rounded-md bg-white text-red-500 text-xs font-medium uppercase tracking-wider hover:bg-red-200 focus:outline-none">
                Confirm
            </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>