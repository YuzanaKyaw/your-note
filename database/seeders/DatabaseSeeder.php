<?php

namespace Database\Seeders;

use App\Models\Note;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'user_id' => 1,
        //     'name' => 'Mg Mg',
        //     'email' => 'mgmg@example.com',
        //     'password' => bcrypt('12345678')
        // ]);

        Note::factory(20)->create();
    }
}
