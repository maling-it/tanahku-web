import Map from 'ol/Map.js';
import OSM from 'ol/source/OSM.js';
import Overlay from 'ol/Overlay.js';
import TileLayer from 'ol/layer/Tile.js';
import View from 'ol/View.js';
import { fromLonLat, toLonLat } from 'ol/proj.js';

const firstDevice = devices[0];
const attribution =
    '<a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap</a>'
    + ' & Tanahku Dev';
const latitude = parseFloat(firstDevice.latitude);
const longitude = parseFloat(firstDevice.longitude);

const layer = new TileLayer({
    source: new OSM({
        attributions: attribution
    }
    ),
});

const map = new Map({
    layers: [layer],
    target: 'map',
    view: new View({
        zoom: 6,
    }),
});
map.getView().setCenter(fromLonLat([longitude, latitude]));

function titikTanah(device) {
    const coordinate = fromLonLat([parseFloat(device.longitude), parseFloat(device.latitude)]);
    const dote = document.createElement('a');
    dote.className = 'dot';
    dote.setAttribute('href', '/device/' + device.id);
    const color = 'red'

    dote.style.backgroundColor = color;

    const dot = new Overlay({
        position: coordinate,
        positioning: 'center-center',
        element: dote,
        stopEvent: false,
    });

    map.addOverlay(dot);

    const popover = new bootstrap.Popover(dot.getElement(), {
        placement: 'top',
        html: true,
        title: device.name,
        content: `Latitude: ${device.latitude}, <br> Longitude: ${device.longitude},`,
        trigger: 'hover',
        container: map.getViewport(),
    });

    return dot;
}

devices.forEach(device => titikTanah(device));
