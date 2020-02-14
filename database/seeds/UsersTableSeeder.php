<?php

use App\Models\RevieweeProfile;
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
            'type' => 'admin',
            'name' => 'Aldrin Dolores',
            'email' => 'doloresaldrin@gmail.com',
            'password' => Hash::make('smartedge'),
        ]);

        User::create([
            'type' => 'admin',
            'name' => 'Joshua Sisor',
            'email' => 'josh.sisor@gmail.com',
            'password' => Hash::make('smartedge'),
        ]);

        $abegail = User::create([
            'name' => 'Ruth Abegail De Vera',
            'email' => 'ruthabegail25@yahoo.com',
            'password' => Hash::make('smartedge'),
        ]);
        $abegail->reviewee_profile()->save(
            RevieweeProfile::create([
                'reviewee_number' => '000001',
                'enrolled_for' => 'ECE BOARD 2020',
            ])
        );

        $kim = User::create([
            'name' => 'Kim Sanchez',
            'email' => 'kimberly21claire@gmail.com',
            'password' => Hash::make('smartedge'),
        ]);
        $kim->reviewee_profile()->save(
            RevieweeProfile::create([
                'reviewee_number' => '000002',
                'enrolled_for' => 'ECE BOARD 2020',
            ])
        );

        $neriz = User::create([
            'name' => 'Neriz Dulnuan',
            'email' => 'nr7dnuan@gmail.com',
            'password' => Hash::make('smartedge'),
        ]);
        $neriz->reviewee_profile()->save(
            RevieweeProfile::create([
                'reviewee_number' => '000003',
                'enrolled_for' => 'ECE BOARD 2020',
                'expired_at' => now(),
            ])
        );
    }
}
