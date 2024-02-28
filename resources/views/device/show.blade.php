<x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <div class="card p-3 m-3">
        <h1 class="card-title">{{ $device['data']['name'] }}</h1>
        <div class="card-body">
            <p>Name: {{ $device['data']['name'] }}</p>
            <p>Location: {{ $device['data']['location'] }}</p>
            <p>Latitude: {{ $device['data']['latitude'] }}</p>
            <p>Longitude: {{ $device['data']['longitude'] }}</p>
        </div>
    </div>
    <?php
    $dataSets = [
        [
            'title' => 'Air Temperature',
            'chartId' => 'airchart',
            'data' => $airTemperatureData['data'] ?? [],
            'seriesName' => 'Temperature',
            'unit' => '°C',
        ],
        [
            'title' => 'Wind Speed',
            'chartId' => 'windspeed',
            'data' => $windSpeedData['data'] ?? [],
            'seriesName' => 'Speed',
            'unit' => 'm/s',
        ],
        [
            'title' => 'Soil PH',
            'chartId' => 'soilph',
            'data' => $soilPhData['data'] ?? [],
            'seriesName' => 'Ph',
            'unit' => '',
        ],
        [
            'title' => 'Soil Moisture',
            'chartId' => 'soilmois',
            'data' => $soilMoisData['data'] ?? [],
            'seriesName' => 'Moisture',
            'unit' => '',
        ],
        [
            'title' => 'Rain Fall',
            'chartId' => 'rainfall',
            'data' => $rainFallData['data'] ?? [],
            'seriesName' => 'rain',
            'unit' => 'mm',
        ],
        [
            'title' => 'Solar Radiation',
            'chartId' => 'solarrad',
            'data' => $solarRadData['data'] ?? [],
            'seriesName' => 'radiation',
            'unit' => 'W/m²',
        ],
        [
            'title' => 'Humidity',
            'chartId' => 'humidity',
            'data' => $humidityData['data'] ?? [],
            'seriesName' => 'humidity',
            'unit' => '%',
        ],
    ];

    ?>
    @foreach ($dataSets as $dataSet)
        @if (!empty($dataSet['data']))
            <div class="card p-2 m-3">
                <h2 class="card-title text-center">{{ $dataSet['title'] }}</h2>
                <div class="card-body">
                    <div id="{{ $dataSet['chartId'] }}"></div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var data = {!! json_encode($dataSet['data']) !!};
                        var chartData = data.map(function(item) {
                            return {
                                x: new Date(item.createdOn).toLocaleString(undefined, {
                                    dateStyle: 'short',
                                    timeStyle: 'short'
                                }),
                                y: item.value,
                            };
                        });

                        var chartOptions = {
                            series: [{
                                name: '{{ $dataSet['seriesName'] }}',
                                data: chartData,
                                color: '#00E396'
                            }],
                            chart: {
                                height: 350,
                                type: 'bar',
                                zoom: {
                                    enabled: true,
                                    type: 'x',
                                    autoScaleYaxis: true
                                },
                                toolbar: {
                                    autoSelected: 'zoom'
                                }
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
                                        return val + " {{ $dataSet['unit'] }}";
                                    }
                                }
                            },
                            responsive: [{
                                breakpoint: 480,
                                options: {
                                    chart: {
                                        width: '100%'
                                    },
                                    legend: {
                                        position: 'bottom'
                                    }
                                }
                            }]
                        };

                        var chart = new ApexCharts(document.querySelector("#{{ $dataSet['chartId'] }}"), chartOptions);
                        chart.render();
                    });
                </script>
            </div>
        @else
            <div class="alert alert-danger m-3" role="alert">
                <h5 class="alert-heading">{{ $dataSet['title'] }}</h5>
                <p>No {{ $dataSet['title'] }} data available</p>
            </div>
        @endif
    @endforeach
</x-app-layout>
