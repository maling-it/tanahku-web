<x-app-layout>
    <div class="card p-3 m-3">
        <h1 class="card-title">{{ $device['data']['name'] }}</h1>
        <div class="card-body">
            <p>Name: {{ $device['data']['name'] }}</p>
            <p>Location: {{ $device['data']['location'] }}</p>
            <p>Latitude: {{ $device['data']['latitude'] }}</p>
            <p>Longitude: {{ $device['data']['longitude'] }}</p>
        </div>
    </div>
</x-app-layout>
<script>
    var devices = [
        {
            "id": 1,
            "name": "Device 1",
            "location": "Location 1",
            "latitude": 1.0,
            "longitude": 1.0
        }
    ];

</script>
