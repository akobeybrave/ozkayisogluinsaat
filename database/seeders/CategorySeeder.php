<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create([
                'name' => 'TADİLAT',
                'slug' => 'tadilat',
                'description' => 'Evinizi yenileyin, yaşam kalitenizi artırın! Profesyonel tadilat hizmetlerimizle modern ve şık yaşam alanları tasarlıyoruz. Eskiyi yeniye, hayalinizi gerçeğe dönüştürüyoruz.',
                'image' => 'uploads/categories/1734971608_tadilat-1.webp',
                'created_at' => now(),
                'updated_at' => now(),
        ]);


        Category::create([
                'name' => 'İZOLASYON',
                'slug' => 'izolasyon',
                'description' => 'Su sızıntılarına son! Gelişmiş izolasyon çözümlerimizle binalarınızı koruyor, dayanıklılığı artırıyoruz. Su yalıtımı konusunda güvenilir ve uzun ömürlü hizmetler sunuyoruz.',
                'image' => 'uploads/categories/1734971616_izolasyon-1.webp',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Category::create([
                'name' => 'ÇİZİM',
                'slug' => 'cizim',
                'description' => 'Hayalinizdeki projelere hayat veriyoruz! Uzman ekibimizle modern, estetik ve işlevsel mimari çizimler sunuyoruz. Detay odaklı çözümlerimizle yapılarınıza değer katıyoruz.',
                'image' => 'uploads/categories/1734971623_cizim-1.webp',
                'created_at' => now(),
                'updated_at' => now(),
        ]);




    }


}
