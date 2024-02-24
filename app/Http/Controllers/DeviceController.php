<?php

namespace App\Http\Controllers;

use App\Models\Device;

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

        return view('device.show', compact('device'));
    }
}
