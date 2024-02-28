<x-app-layout>
    <div class="container">
        <h1 class="text-center p-3">List Device</h1>
        <hr class="border" />
        <div class="row">
            @foreach ($devices['data'] as $device)
                <div class="col">
                    <div class="card m-1 w-400 mw-full p-3">
                        <h2 class="card-title text-center">{{ $device['name'] }}</h2>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>Location:</td>
                                    <td>{{ $device['location'] }}</td>
                                </tr>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{ $device['name'] }}</td>
                                </tr>
                                <tr>
                                    <td>Latitude:</td>
                                    <td>{{ $device['latitude'] }}</td>
                                </tr>
                                <tr>
                                    <td>Longitude:</td>
                                    <td>{{ $device['longitude'] }}</td>
                                </tr>
                            </table>
                        </div>
                        <a href="{{ config('app.url') }}/device/{{ $device['id'] }}" class="btn btn-primary">More</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
