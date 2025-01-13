<?php

namespace Database\Seeders;

use App\Models\Mimari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MimariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mimari::create([
            'title' => 'MİMARİ ÇİZİM HİZMETLERİMİZ',
            'description' => 'Projelerinizin ilk adımı olan mimari çizimlerde, modern tasarım anlayışı ve yenilikçi çözümlerle sizlere profesyonel hizmet sunuyoruz. Alanında uzman ekibimiz, ihtiyaçlarınıza uygun estetik, işlevsel ve sürdürülebilir tasarımlar oluşturur.',
            'subtitle1' => 'PROJE DANIŞMANLIĞI',
            'description1' => 'İlk etapta ihtiyaçlarınızı detaylı bir şekilde analiz ederek doğru çözümler üretmek için sizinle birebir çalışıyoruz.',
            'subtitle2' => 'TASARIM SÜRECİ',
            'description2' => 'İleri teknolojiler kullanarak 2D ve 3D çizimler oluşturuyor, tasarımlarımızın her açıdan kusursuz olmasını sağlıyoruz.',
            'subtitle3' => 'UGULAMA ÇÖZÜMLERİ',
            'description3' => 'Hazırladığımız projeler, uygulama sürecinde netlik ve kolaylık sağlayacak şekilde detaylandırılmıştır.',
            'frontimage1' => 'uploads/mimaris/1736068674_cizim-1.webp',
            'frontimage2' => 'uploads/mimaris/1736068683_cizim-2.webp',
            'frontimage3' => 'uploads/mimaris/1736068797_cizim-3.webp',
            'pagedescription' => 'Mimari çizim hizmetlerimizle projelerinizi hayata geçiriyoruz! Uzman ekibimiz, modern tasarım prensipleriyle estetik, işlevsel ve sürdürülebilir yapı planları oluşturur. Her bir detayda müşterilerimizin ihtiyaç ve beklentilerini önceliklendiriyor, projelere özgün ve yenilikçi yaklaşımlar sunuyoruz. İster konut, ister ticari veya endüstriyel projeler olsun, profesyonel çözümlerimizle hayalinizdeki yapıyı en ince ayrıntısına kadar planlıyoruz. Tasarımlarımız, sadece görsel güzelliği değil, aynı zamanda mekanın ergonomisini ve yapısal bütünlüğünü de en üst düzeye çıkarır. Geleceğinize yön veren projeler için doğru adres: Mimari çizimde uzmanlık ve yaratıcılık bir arada!',
        ]);
    }
}


