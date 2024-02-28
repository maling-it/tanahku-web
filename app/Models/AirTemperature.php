<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class AirTemperature
{
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL') . '/api/v1/airtemperature';
    }

    public function getAllData($deviceId, $pageSize = 100)
    {
        $response = Http::get("{$this->apiUrl}/alldata", [
            'deviceId' => $deviceId,
            'pageSize' => $pageSize
        ]);

        return $response->json();
    }
    public function getAll()
    {
        $response = Http::get("{$this->apiUrl}/alldata");

        return $response->json();
    }
}
