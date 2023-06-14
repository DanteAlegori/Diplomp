<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Данил',
            'surname' => 'Зайцев',
            'login' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin11'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Редактор',
            'surname' => 'Редакторович',
            'login' => 'editor',
            'email' => 'editor@test.com',
            'password' => Hash::make('editor22'),
            'editor' => true
        ]);

        User::create([
            'name' => 'Модератор',
            'surname' => 'Модератович',
            'login' => 'moderator',
            'email' => 'moderator@test.com',
            'password' => Hash::make('moderator33'),
            'moderator' => true
        ]);
    }
}
