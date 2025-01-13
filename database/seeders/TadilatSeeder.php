<?php

namespace Database\Seeders;

use App\Models\Tadilat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TadilatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tadilat::create([
            'title' => 'TADİLAT HİZMETLERİMİZ',
            'description' => 'Tadilat projelerimizle yaşam alanlarınızı yenileyerek daha modern, estetik ve konforlu mekanlar yaratıyoruz. Evinizden iş yerinize kadar her türlü alanda ihtiyaçlarınıza özel çözümler sunuyoruz.',
            'subtitle1' => 'MUTFAK VE BANYO TADİLATLARI',
            'description1' => 'Fonksiyonel ve şık tasarımlar sunarak mutfak ve banyolarınızı modern bir görünüme kavuşturuyoruz',
            'subtitle2' => 'ZEMİN VE DUVAR ÇALIŞMALARI',
            'description2' => 'Parke döşeme, seramik kaplama ve boyama işlemleriyle mekanlarınızı yeniliyoruz.',
            'subtitle3' => 'KOMPLE YENİLEME',
            'description3' => 'Alanlarınızı baştan aşağı yenileyerek estetik ve işlevselliği bir araya getiriyoruz',
            'frontimage1' => 'uploads/tadilats/1734972713_tadilat-1.webp',
            'frontimage2' => 'uploads/tadilats/1734972725_tadilat-2.webp',
            'frontimage3' => 'uploads/tadilats/1734972733_tadilat-3.webp',
            'pagedescription' => 'Tadilat hizmetlerimizle yaşam alanlarınızı yeniliyor, daha modern, konforlu ve işlevsel mekanlar oluşturuyoruz. Ev, ofis, mağaza ya da diğer ticari alanlarınız için kapsamlı tadilat çözümleri sunarak, alanınızı en verimli şekilde değerlendirmenizi sağlıyoruz. Uzman ekibimizle duvar, zemin, tavan yenilemelerinden tesisat düzenlemelerine, dekoratif dokunuşlardan komple dönüşümlere kadar her aşamada profesyonel destek veriyoruz. Kaliteli malzeme kullanımı ve titiz işçilikle, hem estetik hem de uzun ömürlü çözümler üretiyoruz. İster küçük çaplı değişiklikler ister kapsamlı renovasyonlar olsun, projelerinizi zamanında ve bütçenize uygun bir şekilde tamamlıyoruz. Yaşam alanlarınıza yeni bir soluk getirmek için tadilat işlerinizde yanınızdayız!',
        ]);
    }
}
