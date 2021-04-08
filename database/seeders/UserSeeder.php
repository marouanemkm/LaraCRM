<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'joe',
            'email' => 'joe@gmail.fr',
            'password' => Hash::make('joe'),
            'role' => 'user',
        ]);
    }
}
