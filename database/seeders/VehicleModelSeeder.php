<?php

namespace Database\Seeders;

use App\Models\VehicleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleModel::query()->create([
            'name' => 'Model 1',
            'establishment_year' => '2018'
        ]);
        VehicleModel::query()->create([
            'name' => 'Model 2',
            'establishment_year' => '2019'
        ]);
        VehicleModel::query()->create([
            'name' => 'Model 3',
            'establishment_year' => '2021'
        ]);
    }
}
