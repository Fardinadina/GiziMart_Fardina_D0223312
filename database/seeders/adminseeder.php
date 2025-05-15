<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Pengguna::create([
        'name'=>'fardina',
        'email' => 'fardina@gmail.com',
        'password' => Hash::make('12345678'),
        'role' => 'admin',
       ]);
    }
}
