<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
            'hero_title' => 'ÖZ KAYIŞOĞLU İNŞAAT',
            'hero_subtitle' => 'TADİLAT',
            'hero_slogan' => 'Eskiyi Yeniye, Hayali Gerçeğe Dönüştürüyoruz',
            'hero_image' => 'uploads/hero/1736778794_a.webp',
        ]);

        Hero::create([
            'hero_title' => 'ÖZ KAYIŞOĞLU İNŞAAT',
            'hero_subtitle' => 'MİMARİ ÇİZİMLER',
            'hero_slogan' => 'Hayallerinizin Planını Çiziyoruz',
            'hero_image' => 'uploads/hero/1736778803_b.webp',
        ]);

        Hero::create([
            'hero_title' => 'ÖZ KAYIŞOĞLU İNŞAAT',
            'hero_subtitle' => 'SU İZALASYON',
            'hero_slogan' => 'Binanızı Güçlendiren Çözümler Bizden',
            'hero_image' => 'uploads/hero/1736778809_c.webp',
        ]);
    }
}
