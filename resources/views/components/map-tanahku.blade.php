@vite([
    'resources/js/app.js'
])
<div id="map" class="map"></div>

<style>
    #dot {
        width: 10px;
        height: 10px;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 5px;
        background-color: #0FF;
        opacity: 0.5;
    }
    .popover-body {
        min-width: 276px;
    }
    /* map point */
    .dot {
        height: 10px;
        width: 10px;
        border-radius: 50%;
        display: inline-block;
        border: 1px solid;
    }
</style>
<script>
    var devices = @json($devices);

    var firstDevice = devices[0];
</script>

