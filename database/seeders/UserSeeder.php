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
        User::updateOrCreate(
            ['email' => 'admin@bdkrishi.com'], // Find user by email
            [
                'name' => 'Admin',
                'password' => Hash::make('admin@bdkrishi.com'), // Update or set the password
            ]
        );
    }
}
