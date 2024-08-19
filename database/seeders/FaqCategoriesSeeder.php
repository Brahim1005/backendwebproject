<?php

namespace Database\Seeders;

use App\Models\FaqCategory;
use Illuminate\Database\Seeder;

class FaqCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FaqCategory::create(['name' => 'General']);
        FaqCategory::create(['name' => 'Shipping']);
        FaqCategory::create(['name' => 'Returns']);
        FaqCategory::create(['name' => 'Payments']);
        FaqCategory::create(['name' => 'Technical Support']);
    }
}
