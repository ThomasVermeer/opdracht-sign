<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@sign.curio.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('Welkom123!'), // password
        ]);
        $user->assignRole('admin');
    }
}
