<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class WindSpeed
{
    protected $apiUrl;
    public function __construct()
    {
        $this->apiUrl = env('API_URL') . '/api/v1/windspeed';
    }
    public function getAllData($deviceId, $pageSize = 100)
    {
        $response = Http::get("{$this->apiUrl}/alldata", [
            'deviceId' => $deviceId,
            'pageSize' => $pageSize
        ]);

        return $response->json();
    }
}
