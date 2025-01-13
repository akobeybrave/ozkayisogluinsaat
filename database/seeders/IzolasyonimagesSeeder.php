<?php

namespace Database\Seeders;

use App\Models\Izolasyonimages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IzolasyonimagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Izolasyonimages::create([
            'filename' => "1736071679_vFS0bfpChJ.webp",
            'filepath' => 'uploads/izolasyonimages/small/1736071679_vFS0bfpChJ.webp',
        ]);

        Izolasyonimages::create([
            'filename' => "1736071680_REggWlQiMA.webp",
            'filepath' => 'uploads/izolasyonimages/small/1736071680_REggWlQiMA.webp',
        ]);

        Izolasyonimages::create([
            'filename' => "1736071680_zROGbREhoC.webp",
            'filepath' => 'uploads/izolasyonimages/small/1736071680_zROGbREhoC.webp',
        ]);
    }
}
