<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        User::create([
            'name' => 'aydın',
            'username' => 'akobey',
            'email' => 'akobey@gmail.com',
            'image' => 'user.webp',
            'panel' => 'admin',
            'status' => 1,
            'password' => bcrypt("aa751075"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        User::create([
            'name' => 'Pala',
            'username' => 'palaremz',
            'image' => 'user.webp',
            'email' => 'palaremz@gmail.com',
            'panel' => 'website',
            'status' => 1,
            'password' => bcrypt("aa751075"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Metin İşbir',
            'username' => 'Metin',
            'image' => 'user.webp',
            'email' => 'info@ozkayisogluinsaat.com',
            'panel' => 'website',
            'status' => 1,
            'password' => bcrypt("aa751075"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
