<?php

namespace Database\Seeders;

use App\Models\Contactform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContactformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 8; $i++) 
        { 
            $contactform = new Contactform;
            $contactform->name = fake()->name;
            $contactform->email = fake()->email;
            $contactform->subject = Str::random('10');
            $contactform->message = Str::random('15');
            $contactform->save();
        }
    }
}
