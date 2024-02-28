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
    @if (!@empty($airTemperatureData['data']))
        <div class="card p-3 m-3">
            <h2 class="card-title">Air Temperature</h2>
            <div class="card-body">
                <div id="airchart"></div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var data = {!! json_encode($airTemperatureData['data']) !!};
                    console.log(data);
                    var chartData = data.map(function(item) {
                        return {
                            x: new Date(item.createdOn).getTime().toString(),
                            y: item.value,
                        };
                    });

                    var airtemperature = {
                        series: [{
                            name: 'tes',
                            data: chartData
                        }],
                        chart: {
                            height: 350,
                            type: 'bar'
                        },
                        plotOptions: {
                            bar: {
                                columnWidth: '60%'
                            }
                        },
                        colors: ['#00E396'],
                        dataLabels: {
                            enabled: false
                        },
                        tooltip: {
                            theme: 'dark',
                            y: {
                                formatter: function(val) {
                                    return val + " °C";
                                }
                            }
                        }
                    };


                    var chart = new ApexCharts(document.querySelector("#airchart"), airtemperature);

                    chart.render();
                });
            </script>
        </div>
    @else
        <div class="alert alert-danger m-3" role="alert">
            <h5 class="alert-heading">Air Temperature</h5>
            <p>No Air Temperature data available</p>
        </div>
    @endif
    {{-- Windspeed --}}
    @if (!@empty($windSpeedData['data']))
    <div class="card p-3 m-3">
        <h2 class="card-title">Wind Speed</h2>
        <div class="card-body">
            <div id="windspeed"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var data = {!! json_encode($windSpeedData['data']) !!};
                console.log(data);
                var chartData = data.map(function(item) {
                    return {
                        x: new Date(item.createdOn).getTime().toString(),
                        y: item.value,
                    };
                });

                var windspeed = {
                    series: [{
                        name: 'tes',
                        data: chartData
                    }],
                    chart: {
                        height: 350,
                        type: 'bar'
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: '60%'
                        }
                    },
                    colors: ['#00E396'],
                    dataLabels: {
                        enabled: false
                    },
                    tooltip: {
                        theme: 'dark',
                        y: {
                            formatter: function(val) {
                                return val + " °C";
                            }
                        }
                    }
                };


                var chart = new ApexCharts(document.querySelector("#windspeed"), windspeed);

                chart.render();
            });
        </script>
    </div>
@else
    <div class="alert alert-danger m-3" role="alert">
        <h5 class="alert-heading">Wind Speed</h5>
        <p>No Wind Speed data available</p>
    </div>
@endif
</x-app-layout>
