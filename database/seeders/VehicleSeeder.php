<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturer = Manufacturer::query()->find(1);
        $manufacturer->vehicles()->createMany([
            [
                'model_id' => 1,
                'number_chassis' => '0000222099999444722337120000',
                'title' => 'Title 1',
                'description' => 'Description 1',
                'image' => 'https://cdn.unenvironment.org/s3fs-public/styles/topics_content_promo/public/2021-05/alberta-2297204_1920.jpg?itok=aim5GFuY'
            ],
            [
                'model_id' => 2,
                'number_chassis' => '000022209999955555522337120000',
                'title' => 'Title 2',
                'description' => 'Description 2',
                'image' => 'https://cdn.unenvironment.org/s3fs-public/styles/topics_content_promo/public/2021-05/alberta-2297204_1920.jpg?itok=aim5GFuY'
            ],
        ]);
    }
}
