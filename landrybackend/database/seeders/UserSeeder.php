<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'blacknumbers',
                'email' => 'number@gmail.com',
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach ($users as $userItem) {
            User::create($userItem);
        }
    }
}
