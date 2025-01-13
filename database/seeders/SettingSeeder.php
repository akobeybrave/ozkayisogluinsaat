<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'owner'            => 'Metin İsbir',
            'brand'            => 'Öz Kayışoğlu İnşaat',
            'url'              => 'https://ozkayisogluinsaat.com/',
            'title'            => 'Mimari Çizimler, Tadilat ve İzolasyon',
            'tel'              => '541 901 27 07',
            'mobile'           => '541 901 27 07',
            'city'             => 'Antalya',
            'town'             => 'Manavgat',
            'district'         => 'Sarılar',
            'address'          => 'Muhittin Ersoy Bulvarı No:102/2',
            'google_map'       => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.764200639222!2d31.415917399999998!3d36.800203599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c357cb884ca505%3A0xefa302086887f293!2zw5Z6a2F5xLHFn2_En2x1IGl6b2xhc3lvbg!5e0!3m2!1sen!2str!4v1736772632746!5m2!1sen!2str',
            'lat'              => '36.80048353544715',
            'lng'              => '31.415930466119445',
            'email_info'       => 'info@ozkayisogluinsaat.com',
            'email_muhasebe'   => 'info@ozkayisogluinsaat.com',
            'facebook'         => 'https://www.facebook.com/',
            'instagram'        => 'https://www.finstagram.com/',
            'footer_description' => "İnşaat sektöründe uzmanlaşmış firmamız, mimari çizim su izolasyonu ve tadilat alanlarında geniş bir hizmet yelpazesi sunmaktadır.",
            'meta_description' => 'İnşaat sektöründe uzmanlaşmış firmamız, mimari çizim su izolasyonu ve tadilat alanlarında geniş bir hizmet yelpazesi sunmaktadır.',
            'favicon'          => 'favicon.webp',
            'logo'             => 'logo.webp',
        ]);
    }
}
