<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membre->membre de l'entreprise
        User::create([
            'name' => 'membre',
            'email' => 'membre@gmail.com',
            'password' => Hash::make('membre'),
            'role' => 'membre',
        ]);
    }
}
