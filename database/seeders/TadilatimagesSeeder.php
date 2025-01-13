<?php

namespace Database\Seeders;

use App\Models\Tadilatimages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TadilatimagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Tadilatimages::create([
            'filename' => "1736064153_sLPWSVUY2i.webp",
            'filepath' => 'uploads/tadilatimages/small/1736064153_sLPWSVUY2i.webp',
        ]);

        Tadilatimages::create([
            'filename' => "1736064154_yHj9AlRusT.webp",
            'filepath' => 'uploads/tadilatimages/small/1736064154_yHj9AlRusT.webp',
        ]);

        Tadilatimages::create([
            'filename' => "1736064155_bltVqNxU7g.webp",
            'filepath' => 'uploads/tadilatimages/small/1736064155_bltVqNxU7g.webp',
        ]);

    }
}
