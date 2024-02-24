<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Device;

class MapTanahku extends Component
{
    public $devices;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $deviceModel = new Device();

        $allDevices = $deviceModel->getAll();

        $this->devices = $allDevices['data'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.map-tanahku');
    }
}
