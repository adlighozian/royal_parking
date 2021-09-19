<?php

namespace Database\Seeders;

use App\Models\kendaraan;
use App\Models\parkiran;
use Illuminate\Database\Seeder;
use App\Models\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        user::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@a.com',
            'password' => bcrypt('admin'),
        ]);

        parkiran::create([
            'slug' => 'parkiran-pertama',
            'nama' => 'parkiran pertama',
            'keterangan' => 'ini tempat parkir',
            'gambar' => 'car',
        ]);

        parkiran::create([
            'slug' => 'parkiran-kedua',
            'nama' => 'parkiran ke dua',
            'keterangan' => 'ini tempat parkir',
            'gambar' => 'car',
        ]);

        parkiran::create([
            'slug' => 'parkiran-ketiga',
            'nama' => 'parkiran ke tiga',
            'keterangan' => 'ini tempat parkir',
            'gambar' => 'car',
        ]);

    }
}
