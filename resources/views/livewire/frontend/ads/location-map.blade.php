<div>
    <div wire:ignore id="map" style="width:500px;height:400px;">
    </div>






    <div wire:ignore id="map" style="height: 400px;"></div>

    <div>
        <label for="latitude">Latitude</label>
        <input type="text" id="latitude" wire:model="latitude" readonly>
    </div>

    <div>
        <label for="longitude">Longitude</label>
        <input type="text" id="longitude" wire:model="longitude" readonly>
    </div>
</div>
@push('scripts')
    <script>
        /* Add Inline Google Auth Boostrapper here */

        /* How to initialize the map */
        let map;
        async function initMap() {
            const {
                Map
            } = await google.maps.importLibrary("maps");
            map = new Map(document.getElementById("map"), {
                zoom: 4,
                center: {
                    lat: @js($lat),
                    lng: @js($lng)
                },
                mapId: "DEMO_MAP_ID",
            });
        }

        /* Initialize map when Livewire has loaded */
        document.addEventListener('livewire:load', function() {
            initMap();
        });
    </script>
@endpush
