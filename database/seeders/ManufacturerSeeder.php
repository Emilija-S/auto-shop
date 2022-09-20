<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::query()->create([
            'name' => 'Manufacturer 1',
            'establishment_year' => '22/03/2019'
        ]);

        Manufacturer::query()->create([
            'name' => 'Manufacturer 2',
            'establishment_year' => '12/03/2018'
        ]);

        Manufacturer::query()->create([
            'name' => 'Manufacturer 3',
            'establishment_year' => '06/11/2020'
        ]);
    }
}
