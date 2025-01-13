<?php

namespace Database\Seeders;

use App\Models\Mimariimages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MimariimagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mimariimages::create([
            'filename' => "1736068898_f4Ng7iDcED.webp",
            'filepath' => 'uploads/mimariimages/small/1736068898_f4Ng7iDcED.webp',
        ]);

        Mimariimages::create([
            'filename' => "1736068898_sN1XtJM4Oa.webp",
            'filepath' => 'uploads/mimariimages/small/1736068898_sN1XtJM4Oa.webp',
        ]);

        Mimariimages::create([
            'filename' => "1736068899_VXODQgh15Y.webp",
            'filepath' => 'uploads/mimariimages/small/1736068899_VXODQgh15Y.webp',
        ]);
    }
}
