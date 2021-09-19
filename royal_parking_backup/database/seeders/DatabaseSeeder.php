<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\parkiran;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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
