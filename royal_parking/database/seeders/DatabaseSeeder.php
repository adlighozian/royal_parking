<?php

namespace Database\Seeders;

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
            'password' => 'admin'
        ]);

    }
}
