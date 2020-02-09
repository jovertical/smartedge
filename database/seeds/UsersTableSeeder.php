<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aldrin Dolores',
            'email' => 'doloresaldrin@gmail.com',
            'password' => Hash::make('smartedge')
        ]);

        User::create([
            'name' => 'Joshua Sisor',
            'email' => 'josh.sisor@gmail.com',
            'password' => Hash::make('smartedge')
        ]);

        User::create([
            'name' => 'Ruth Abegail De Vera',
            'email' => 'ruthabegail25@yahoo.com',
            'password' => Hash::make('smartedge')
        ]);

        User::create([
            'name' => 'Kim Sanchez',
            'email' => 'kimberly21claire@gmail.com',
            'password' => Hash::make('smartedge')
        ]);

        User::create([
            'name' => 'Neriz Dulnuan',
            'email' => 'nr7dnuan@gmail.com',
            'password' => Hash::make('smartedge')
        ]);
    }
}
