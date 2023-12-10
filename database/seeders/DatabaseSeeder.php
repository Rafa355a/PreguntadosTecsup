<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Victor Arana',
            'email' => 'victor@codersfree.com',
            'age' => 31,
            'password' => bcrypt('12345678'),
            'is_admin' => 1
        ]);

        $this->call([
            TopicSeeder::class
        ]);
    }
}
