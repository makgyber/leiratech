    <div class="py-10">
        <div class="mx-auto sm:px-10 lg:px-10 ">
            <x-maps-leaflet 
                id="main_map"
                class="border-2 border-blue-300 shadow-lg"
                style="height:50vh;width:50hw;"
                :centerPoint="['lat' => 14.556586, 'long' => 121.023415]" 
                :zoomLevel="12"
                :markers="[['lat' => 14.556586, 'long' => 121.023415], ['lat' => 14.58, 'long' => 121.0, 'text' => 'test'], ['lat' => 14.45056, 'long' => 120.98278]]"
            ></x-maps-leaflet>
        </div>
    </div>