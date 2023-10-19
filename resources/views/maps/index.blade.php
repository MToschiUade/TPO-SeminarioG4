<x-map-layout>
{{--    <div id="map" class=" w-full h-4"></div>--}}
    <div id="map" style="width: 100%; height: 85.7vh; overflow-y: hidden"></div>

    @push('scripts')
        <script type="module">
            // Basic Map
            if (document.getElementById("map")) {
                // map active
                var position = [-34.60355339707198, -58.3815811344386];
                var map = L.map("map").setView(position, 5);

                L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                    attribution:
                        '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                    maxZoom: 18,
                }).addTo(map);

                var fireIcon = L.icon({
                    iconUrl: '{{@asset('images/icon/red-map-t.png')}}',
                    // shadowUrl: 'leaf-shadow.png',

                    iconSize:     [20, 32], // size of the icon
                    //shadowSize:   [50, 64], // size of the shadow
                    iconAnchor:   [0, 0], // point of the icon which will correspond to marker's location
                    // shadowAnchor: [4, 62],  // the same for the shadow
                    popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
                });

                L.marker(position, {icon:fireIcon})
                    .addTo(map)
                    .bindPopup(
                        '<div class="">Incendio Activo.</div>'
                    )
                    .openPopup();
                // marker map
                var circleRadius = 4500;
                var polygonCoords = [
                    [47.2263299, -1.6222],
                    [47.21024000000001, -1.6270065],
                    [47.1969447, -1.6136169],
                    [47.18527929999999, -1.6143036],
                    [47.1794457, -1.6098404],
                    [47.1775788, -1.5985107],
                    [47.1676598, -1.5753365],
                    [47.1593731, -1.5521622],
                    [47.1593731, -1.5319061],
                    [47.1722111, -1.5143967],
                    [47.1960115, -1.4841843],
                    [47.2095404, -1.4848709],
                    [47.2291277, -1.4683914],
                    [47.2533687, -1.5116501],
                    [47.2577961, -1.5531921],
                    [47.26828069, -1.5621185],
                    [47.2657179, -1.589241],
                    [47.2589612, -1.6204834],
                    [47.237287, -1.6266632],
                    [47.2263299, -1.6222],
                ];
            }
        </script>
    @endpush
</x-map-layout>
