<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::create([
            'nama' => 'Anselmus Karno',
            'username' => 'ansel',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'nama' => 'Junanto Bumbungan',
            'username' => 'junan',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'nama' => 'Sri Anna Raya',
            'username' => 'sri',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'nama' => 'Helmi Paris',
            'username' => 'helmi',
            'password' => bcrypt('12345678')
        ]);
    }
}
