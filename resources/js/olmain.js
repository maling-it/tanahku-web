import Map from 'ol/Map.js';
import OSM from 'ol/source/OSM.js';
import Overlay from 'ol/Overlay.js';
import TileLayer from 'ol/layer/Tile.js';
import View from 'ol/View.js';
import { fromLonLat, toLonLat } from 'ol/proj.js';

const popoverTriggerList = document.querySelectorAll(
    "[data-bs-toggle='popover']"
);

const popoverList = [...popoverTriggerList].map(
    popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl)
);

const firstDevice = devices[0];

const latitude = parseFloat(firstDevice.latitude);
const longitude = parseFloat(firstDevice.longitude);

const layer = new TileLayer({
    source: new OSM(),
});

const map = new Map({
    layers: [layer],
    target: 'map',
    view: new View({
        zoom: 6,
    }),
});
map.getView().setCenter(fromLonLat([longitude, latitude]));

devices.forEach(function (device) {
    // Create a new div element for each marker
    const dot = document.createElement('a');
    dot.className = 'dot';
    dot.setAttribute('id', 'dot');
    dot.setAttribute('href', '/device/' + device.id);
    dot.setAttribute('role', 'button');
    dot.setAttribute('data-bs-html', 'true');
    dot.setAttribute('class', 'dot');
    dot.setAttribute('data-bs-toggle', 'popover');
    dot.setAttribute('data-bs-placement', 'top');
    dot.setAttribute('data-bs-title', device.name);
    dot.setAttribute('data-bs-content', `Latitude: ${device.latitude}, <br> Longitude: ${device.longitude}`);
    dot.setAttribute('data-bs-trigger', 'hover');

    const marker = new Overlay({
        position: fromLonLat([parseFloat(device.longitude), parseFloat(device.latitude)]),
        positioning: 'center-center',
        element: dot,
        stopEvent: false,
    });
    map.addOverlay(marker);
});
