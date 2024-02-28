<x-app-layout>
    @foreach($devices['data'] as $device)
        <div class="card m-3 p-3">
            <h2 class="card-title">{{ $device['name'] }}</h2>
            <div class="card-body">

                <p>ID: {{ $device['id'] }}</p>
                <p>Name: {{ $device['name'] }}</p>
                <p>Location: {{ $device['location'] }}</p>
                <p>Latitude: {{ $device['latitude'] }}</p>
                <p>Longitude: {{ $device['longitude'] }}</p>
            </div>
        </div>
    @endforeach

</x-app-layout>
