<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'Admin@ehb.be';
        $user->usertype = 1;
        $user->phone = '045869885';
        $user->address = 'Nijverheidskaai 170';
        $user->password = Hash::make('Password!321');
        $user->save();

        $user = new User;
        $user->name = 'Brahim';
        $user->email = 'brahim@gmail.com';
        $user->usertype = 0;
        $user->phone = '0495869822';
        $user->address = 'Brusselsestraat';
        $user->password = Hash::make('Student1');
        $user->save();

        for ($i=0; $i < 5; $i++) 
        { 
            $user = new User;
            $user->name = fake()->name;
            $user->email = fake()->email;
            $user->usertype = 0;
            $user->phone = '';
            $user->password = Hash::make('Student1');
            $user->save();
        }


    }


}
