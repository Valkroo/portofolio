<?php

namespace Database\Seeders;

use App\Models\Post;
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
        Post::factory(13)->create();
        User::create([
            'name' => 'Fahmi Ahmad',
            'email' => 'fahmi@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
