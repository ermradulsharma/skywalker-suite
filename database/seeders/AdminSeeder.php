<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        if (User::count() == 0) {
            $user = User::create([
                'name' => 'Zaiba',
                'user_type' => 'admin',
                'email' => 'zaibainfotech@gmail.com',
                'password' => Hash::make('123456789'),
            ]);
            $user = User::create([
                'name' => 'Zaiba',
                'user_type' => 'user',
                'email' => 'zaibainfotech002@gmail.com',
                'password' => Hash::make('123456789'),
            ]);
        }
    }
}
