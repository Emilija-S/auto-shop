<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class VehicleController extends Controller
{

    public function index(): Response
    {
        $vehicles = Vehicle::all();
        return Inertia::render('Vehicle/Index', compact('vehicles'));
    }

    public function create(): Response
    {
        $manufacturers = Manufacturer::all();
        $vehicle_models = VehicleModel::all();
        return Inertia::render('Vehicle/Create', compact('vehicle_models', 'manufacturers'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'manufacturer_id' => 'required',
            'model_id' => 'required',
            'number_chassis' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $vehicle = new Vehicle();
        $vehicle->manufacturer_id = $request->input('manufacturer_id');
        $vehicle->model_id = $request->input('model_id');
        $vehicle->number_chassis = $request->input('number_chassis');
        $vehicle->title = $request->input('title');
        $vehicle->description = $request->input('description');
        $vehicle->image = $request->input('image');

        $vehicle->save();

        return Redirect::route("vehicles.index");
    }

    public function edit(Vehicle $vehicle): Response
    {
        $manufacturers = Manufacturer::all();
        $vehicle_models = VehicleModel::all();
        return Inertia::render('Vehicle/Edit', compact('vehicle', 'vehicle_models', 'manufacturers'));
    }

    public function update(Vehicle $vehicle, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'manufacturer_id' => 'required',
            'model_id' => 'required',
            'number_chassis' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $vehicle->fill($validated);
        $vehicle->save();

        return Redirect::route("vehicles.index");
    }

    public function destroy(Vehicle $vehicle): RedirectResponse
    {
        $vehicle->delete();
        return Redirect::route("vehicles.index");
    }
}
