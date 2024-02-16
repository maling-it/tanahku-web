<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class MapTanahku extends Component
{
    public $devices;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $apiUrl = env('API_URL') . "/api/v1/device/all";
        $response = Http::get($apiUrl);

        $this->devices = $response->json()['data'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.map-tanahku');
    }
}
