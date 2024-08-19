<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch category IDs
        $generalCategoryId = DB::table('faq_categories')->where('name', 'General')->value('id');
        $shippingCategoryId = DB::table('faq_categories')->where('name', 'Shipping')->value('id');
        $returnsCategoryId = DB::table('faq_categories')->where('name', 'Returns')->value('id');
        $paymentsCategoryId = DB::table('faq_categories')->where('name', 'Payments')->value('id');
        $technicalSupportCategoryId = DB::table('faq_categories')->where('name', 'Technical Support')->value('id');
        // Add more category lookups as needed

        // Insert FAQ entries with valid category IDs
        $faqs = [
            [
                'question' => "Is the shop accessible with public transport?",
                'answer' => "Yes it is with tram 19",
                'category_id' => $generalCategoryId
            ],
            [
                'question' => "Is there only 1 shop in Brussels?",
                'answer' => "",
                'category_id' => $generalCategoryId
            ],
            [
                'question' => "Why are you closed on Monday?",
                'answer' => "",
                'category_id' => $generalCategoryId
            ],
            [
                'question' => "Can we pay in cash in the store ?",
                'answer' => "Yes you can.",
                'category_id' => $paymentsCategoryId
            ],
            [
                'question' => "Can I have a refund if I don't like a dress?",
                'answer' => "You have 14 days to return it, If bought it online.",
                'category_id' => $returnsCategoryId
            ],
            [
                'question' => "I don't see the images of the dresses, help",
                'answer' => "Try to launch the website on another browser.",
                'category_id' => $technicalSupportCategoryId
            ],
            [
                'question' => "How much time does it takes to receive my dress at home ? ",
                'answer' => "6 to 10 days.",
                'category_id' => $shippingCategoryId
            ],
            
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
