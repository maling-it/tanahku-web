<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\AirTemperature;
use App\Models\WindSpeed;

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

        return view('device.show', compact(
            'device',
            'airTemperatureData',
            'windSpeedData'
        ));
    }
}
