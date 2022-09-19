<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Inertia\Response;

class VehicleController extends Controller
{

    public function index(): Response
    {
        $vehicles = Vehicle::all();
        return Inertia::render('Vehicle/Index', compact('vehicles'));
    }

}
