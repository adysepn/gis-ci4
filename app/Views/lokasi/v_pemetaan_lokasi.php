<a href="<?= base_url('Lokasi/inputLokasi') ?>" class="btn btn-success">Tambah Lokasi</a>
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

//pemetaan lokasi

<?php foreach ($lokasi as $key => $value) { ?>
L.marker([<?= $value['latitude']; ?>, <?= $value['longitude']; ?>])
    .bindPopup('<img src="<?= base_url('foto/' . $value['foto_lokasi']) ?>" width="250px"><br>' +
        '<b><?= $value['nama_lokasi'] ?></b><br>' +
        'Alamat : <?= $value['alamat_lokasi'] ?><br>'
    ).addTo(map);
<?php } ?>
</script>