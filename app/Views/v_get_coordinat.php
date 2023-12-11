<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Latitude</label>
            <input class="form-control" name="latitude" id="Latitude">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Longitude</label>
            <input class="form-control" name="longitude" id="Longitude">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Posisi</label>
            <input class="form-control" name="posisi" id="Posisi">
        </div>
    </div>

    <div class="col-sm-12">
        <br>
        <div id="map" style="width: 100%; height: 100vh;"></div>
    </div>
</div>


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

//get coordinat
var latInput = document.querySelector("[name=latitude]");
var lngInput = document.querySelector("[name=longitude]");
var posisi = document.querySelector("[name=posisi]");
var curLocation = [-7.429406207687601, 109.33748090878606];
map.attributionControl.setPrefix(false);

var marker = new L.marker(curLocation, {
    draggable: true,
})

//mengambil coordinat saat marker di pindah/geser
marker.on('dragend', function(e) {
    var position = marker.getLatLng();
    marker.setLatLng(position, {
        curLocation,
    }).bindPopup(position).update();
    $("#Latitude").val(position.lat);
    $("#Longitude").val(position.lng);
    $("#Posisi").val(position.lng + ", " + position.lng);
})

//mengambil koordinat saat map diklik
map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    if (!marker) {
        marker = L.marker(e.latlng).addTo(map);
    } else {
        marker.setLatLng(e.latlng);
    }
    latInput.value = lat;
    lngInput.value = lng;
    posisi.value = lat + ", " + lng;
});

map.addLayer(marker);
</script>