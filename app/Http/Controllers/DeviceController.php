<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\AirTemperature;
use App\Models\Humidity;
use App\Models\WindSpeed;
use App\Models\RainFall;
use App\Models\SoilMois;
use App\Models\SoilPh;
use App\Models\SolarRadiation;

class DeviceController extends Controller
{
    public function index()
    {
        $deviceModel = new Device();

        $devices = $deviceModel->getAll();

        return view('device.index', compact('devices'));
    }

    public function show($id)
    {
        $deviceModel = new Device();
        $device = $deviceModel->getById($id);

        $airTemperatureModel = new AirTemperature();
        $airTemperatureData = $airTemperatureModel->getAllData($id);

        $windSpeedModel = new WindSpeed();
        $windSpeedData = $windSpeedModel->getAllData($id);

        $rainFallModel = new RainFall();
        $rainFallData = $rainFallModel->getAllData($id);

        $soilPhModel = new SoilPh();
        $soilPhData = $soilPhModel->getAllData($id);

        $soilMoisModel = new SoilMois;
        $soilMoisData = $soilMoisModel->getAllData($id);

        $solarRadModel = new SolarRadiation();
        $solarRadData = $solarRadModel->getAllData($id);

        $humidityModel = new Humidity();
        $humidityData = $humidityModel->getAllData($id);

        return view('device.show', compact(
            'device',
            'airTemperatureData',
            'windSpeedData',
            'rainFallData',
            'soilPhData',
            'soilMoisData',
            'solarRadData',
            'humidityData'
        ));
    }
}
