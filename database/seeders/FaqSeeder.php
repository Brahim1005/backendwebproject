<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faq = new Faq;
        $faq->question = "Is the shop accessible with public transport ?";
        $faq->answer = "Yes it is with tram 19";
        $faq->save();

        $faq = new Faq;
        $faq->question = "Is there only 1 shop in Brussels ?";
        $faq->answer = "";
        $faq->save();

        $faq = new Faq;
        $faq->question = "Why are you closed on monday ?";
        $faq->answer = "";
        $faq->save();

        $faq = new Faq;
        $faq->question = "Will the store be open on 1st May ?";
        $faq->answer = "";
        $faq->save();

        $faq = new Faq;
        $faq->question = "How many different dresses do you have ?";
        $faq->answer = "I can't tell that so, come by the store to see it.";
        $faq->save();
    }
}
