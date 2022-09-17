<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public')->deleteDirectory('profile-photos');
        // \App\Models\User::factory(10)->create();
         \App\Models\Admin::factory()->create();

         \App\Models\User::factory()->create([
             'name' => 'User',
             'email' => 'user@gmail.com',
         ]);
    }
}
