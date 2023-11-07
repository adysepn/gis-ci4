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

    // ==== Marker ====
    L.marker([-7.4288263945276025, 109.3363410198248])
        .bindPopup("<img src='<?= base_url('gambar/gedung_a.jpg') ?>' width='200px' > <br>" + "<h5><b>GEDUNG A</b></h5>" +
            "Markas Sipil")
        .addTo(map);

    L.marker([-7.428462016138754, 109.33678626649704])
        .bindPopup("<img src='<?= base_url('gambar/gedung_b.png') ?>' width='200px' > <br> >" + "<h5><b>GEDUNG B</b></h5>" +
            "Markas Dosen")
        .addTo(map);

    L.marker([-7.429233327702552, 109.33655827874989])
        .bindPopup("<img src='<?= base_url('gambar/gedung_c.png') ?>' width='200px' > <br> >" + "<h5><b>GEDUNG C</b></h5>" +
            "Markas Elektro")
        .addTo(map);

    L.marker([-7.428579042804312, 109.33751850952277])
        .bindPopup("<img src='<?= base_url('gambar/gedung_d.jpg') ?>' width='200px' > <br> >" + "<h5><b>GEDUNG D</b></h5>" +
            "Markas Geologi")
        .addTo(map);

    L.marker([-7.429861014732361, 109.33649122352914])
        .bindPopup("<img src='<?= base_url('gambar/gedung_e.png') ?>' width='200px' > <br> >" + "<h5><b>GEDUNG E</b></h5>" +
            "Markas Informatika")
        .addTo(map);

    L.marker([-7.429823779086203, 109.33791011205334])
        .bindPopup("<img src='<?= base_url('gambar/gedung_f.jpg') ?>' width='200px' > <br> >" + "<h5><b>GEDUNG F</b></h5>" +
            "Markas Orang Seminar")
        .addTo(map);

    // ==== polygon ====

    L.polygon([
            [-7.428101155272892, 109.33601453680704],
            [-7.428268741671109, 109.33857107401039],
            [-7.429701825779749, 109.33866590445098],
            [-7.429716871260965, 109.3393145444023],
            [-7.431274075422028, 109.33935626978965],
            [-7.430472905860208, 109.33493717286302],
        ], {
            fillOpacity: 0.1,
        })
        .bindPopup("<h5><b>TEKNIK UNSOED</b></h5>")
        .addTo(map);

    // ==== circle ====

    L.circle([-7.4288263945276025, 109.3363410198248], {
            radius: 50,
            color: 'green',
            fillColor: 'green',
        })
        .bindPopup("Jangkauan Wifi Gedung A")
        .addTo(map);

    L.circle([-7.428462016138754, 109.33678626649704], {
            radius: 50,
            color: 'green',
            fillColor: 'green',
        })
        .bindPopup("Jangkauan Wifi Gedung B")
        .addTo(map);

    L.circle([-7.429233327702552, 109.33655827874989], {
            radius: 50,
            color: 'green',
            fillColor: 'green',
        })
        .bindPopup("Jangkauan Wifi Gedung C")
        .addTo(map);

    L.circle([-7.428579042804312, 109.33751850952277], {
            radius: 50,
            color: 'green',
            fillColor: 'green',
        })
        .bindPopup("Jangkauan Wifi Gedung D")
        .addTo(map);

    L.circle([-7.429861014732361, 109.33649122352914], {
            radius: 50,
            color: 'green',
            fillColor: 'green',
        })
        .bindPopup("Jangkauan Wifi Gedung E")
        .addTo(map);

    L.circle([-7.429823779086203, 109.33791011205334], {
            radius: 50,
            color: 'green',
            fillColor: 'green',
        })
        .bindPopup("Jangkauan Wifi Gedung F")
        .addTo(map);

    // ==== polyline ====

    L.polyline([
            [-7.428693409681085, 109.33576970901929],
            [-7.428773200552144, 109.33612644278207],
            [-7.429321097475447, 109.33602183664111],
            [-7.429355673481934, 109.3360996206977],
            [-7.429419506083742, 109.33613985382884],
            [-7.429754627091052, 109.33768748827346],
        ], {
            color: 'blue',
            weight: 6,
        })
        .bindPopup("Jalur Ke Gedung F")
        .addTo(map);
</script>