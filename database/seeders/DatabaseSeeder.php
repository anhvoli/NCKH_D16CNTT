<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Trần Ngọc Anh',
            'email' => 'tna121104@gmail.com',
            'password' => Hash::make('admin'),   
        ]);
        User::factory()->create([
            'name' => 'chanhom',
            'email' => 'hom@gmail.com',
            'password' => Hash::make('123456'),   
        ]);
    }
}
