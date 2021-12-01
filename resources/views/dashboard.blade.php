<x-dashboard-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto sm:px-10 lg:px-10 ">
            <x-maps-leaflet 
                id="main_map"
                class="border-2 border-blue-300 shadow-lg"
                style="max-width:50hw;height:50vh"
                :centerPoint="['lat' => 14.556586, 'long' => 121.023415]" 
                :zoomLevel="12"
                :markers="[['lat' => 14.556586, 'long' => 121.023415], ['lat' => 14.58, 'long' => 121.0, 'text' => 'test'], ['lat' => 14.45056, 'long' => 120.98278]]"
            ></x-maps-leaflet>
        </div>
    </div>
</x-dashboard-app-layout>
