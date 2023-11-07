<div id="map" style="width: 100%; height: 80vh;">
</div>

<script>
    const cities = L.layerGroup();
    const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    });

    const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        maxZoom: 19,
    });

    const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    });

    const map = L.map('map', {
        center: [-7.429406207687601, 109.33748090878606],
        zoom: 18,
        layers: [osm, cities]
    });

    const baseLayers = {
        'peta1': osm,
        'peta2': osmHOT,
        'peta3': openTopoMap,
    };

    const layerControl = L.control.layers(baseLayers, null, {
        collapsed: false
    }).addTo(map);
</script>