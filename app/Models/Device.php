<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;


class Device
{
    protected $apiUrl;
    public function __construct()
    {
        $this->apiUrl = env('API_URL') . '/api/v1/device';
    }
    public function getById($id)
    {
        $response = Http::get("{$this->apiUrl}/{$id}");
        return $response->json();
    }

    public function getAll()
    {
        $response = Http::get("{$this->apiUrl}/all");
        return $response->json();
    }
}
