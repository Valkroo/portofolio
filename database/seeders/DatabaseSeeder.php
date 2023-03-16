<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Posts::factory(10)->create();
        User::create([
            'name' => 'Fahmi Ahmad',
            'email' => 'fahmi@gmail.com',
            'password' => bcrypt('password')
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
