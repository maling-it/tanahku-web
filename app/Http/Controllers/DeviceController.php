<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DeviceController extends Controller
{
    public function show($id)
    {
        $apiUrl = env('API_URL') . "/api/v1/device/{$id}";
        $response = Http::get($apiUrl);

        $device = $response->json();

        return view('device.show', compact('device'));
    }
}
