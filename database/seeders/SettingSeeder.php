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
            'google_map'       => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d4518.090298970832!2d31.4130855538089!3d36.800009710796935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzbCsDQ4JzAwLjkiTiAzMcKwMjQnNTcuMyJF!5e0!3m2!1sen!2str!4v1736080580919!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
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
