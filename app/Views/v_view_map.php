<div id="map" style="width: 100%; height: 80vh;"></div>

<script>
    const map = L.map('map').setView([-7.429406207687601, 109.33748090878606], 18);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>