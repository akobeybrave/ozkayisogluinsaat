<?php

namespace Database\Seeders;

use App\Models\Izolasyon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IzolasyonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Izolasyon::create([
            'title' => 'IZOLASYON HİZMETLERİMİZ',
            'description' => 'Binalarınızın temelinden çatısına kadar her alanında güvenilir su izolasyonu çözümleri sunuyoruz. Su yalıtımı, yapıların uzun ömürlü ve sağlam kalması için kritik öneme sahiptir ve bu alanda profesyonel hizmet sağlıyoruz.',
            'subtitle1' => 'TEMEL İZOLASYON',
            'description1' => 'Yapınızın temelini dış faktörlerden koruyarak su sızıntılarına karşı dayanıklı hale getiriyoruz.',
            'subtitle2' => 'ÇATI VE TERAS İZOLASYONU',
            'description2' => 'Çatılarda ve teraslarda uyguladığımız su yalıtımı işlemleriyle olası sızıntıları önlüyor, yapılarınızın ömrünü uzatıyoruz.',
            'subtitle3' => 'ISLAK HACİM YALITIMI',
            'description3' => 'Banyo, mutfak gibi ıslak alanlarda suyun zemine ve diğer katmanlara sızmasını engelliyoruz.',
            'frontimage1' => 'uploads/izolasyons/1736071210_izolasyon-1.webp',
            'frontimage2' => 'uploads/izolasyons/1736071221_izolasyon-2.webp',
            'frontimage3' => 'uploads/izolasyons/1736071231_izolasyon-3.webp',
            'pagedescription' => 'İzolasyon hizmetlerimizle yaşam alanlarınızı yeniliyor, daha modern, konforlu ve işlevsel mekanlar oluşturuyoruz. Ev, ofis, mağaza ya da diğer ticari alanlarınız için kapsamlı izolasyon çözümleri sunarak, alanınızı en verimli şekilde değerlendirmenizi sağlıyoruz. Uzman ekibimizle duvar, zemin, tavan yenilemelerinden tesisat düzenlemelerine, dekoratif dokunuşlardan komple dönüşümlere kadar her aşamada profesyonel destek veriyoruz. Kaliteli malzeme kullanımı ve titiz işçilikle, hem estetik hem de uzun ömürlü çözümler üretiyoruz. İster küçük çaplı değişiklikler ister kapsamlı renovasyonlar olsun, projelerinizi zamanında ve bütçenize uygun bir şekilde tamamlıyoruz. Yaşam alanlarınıza yeni bir soluk getirmek için izolasyon işlerinizde yanınızdayız!',
        ]);

    }
}
