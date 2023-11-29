<script src="script/index.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibGlzdmluZGFudSIsImEiOiJjbGkyOWhjc3UwMWFyM2NuejB1b3Z3ODd3In0.tihPfdMfJgp21xhCTku37Q ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [107.592096, -6.867794], // Ganti dengan koordinat pusat peta yang diinginkan
        zoom: 18 // Ganti dengan level zoom yang diinginkan
    });

    // Tambahkan marker
    var marker = new mapboxgl.Marker()
        .setLngLat([107.592096, -6.867794])
        .setPopup(new mapboxgl.Popup().setHTML("<h5>Testing</h5>"))
        .addTo(map);

    var zoomControl = new mapboxgl.NavigationControl();
    map.addControl(zoomControl);

    // Atur tingkat zoom
    map.on('load', function() {
        map.resize(); // Perbarui ukuran peta setelah memuatnya sepenuhnya
        map.flyTo({
            center: [107.592096, -6.867794],
            zoom: 18
        });
    });
</script>
</body>

</html>