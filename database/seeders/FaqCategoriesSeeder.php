<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq_categories')->insert([
            ['name' => 'General'],
            ['name' => 'Shipping'],
            ['name' => 'Returns'],
            ['name' => 'Payments'],
            ['name' => 'Technical Support'],
        ]);
    }
}
